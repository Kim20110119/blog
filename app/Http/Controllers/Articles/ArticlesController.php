<?php

namespace App\Http\Controllers\Articles;

use App\Articles;
use App\Common\Common;
use App\Common\Master;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use SebastianBergmann\RecursionContext\Exception;
use function redirect;
use function view;

/**
 * 記事_コントロール
 *
 * @author kimC
 */
class ArticlesController extends Controller {

    /**
     * ビューに渡すパラメータ
     *
     * @var data
     */
    protected $data;

    /**
     * キーワード
     *
     * @var data
     */
    protected $keywords;

    /**
     * 説明
     *
     * @var data
     */
    protected $description;

    /**
     * コンストラクタ
     *
     * @return void
     */
    public function __construct() {
        $url = Request::url();
        if (strpos($url, 'business') !== false) {
            $this->data['categorys'] = Master::findBusinessCategorys();
        }
    }

    /**
     * 記事一覧画面の表示
     *
     * @return view 記事画面
     */
    public function index() {
        //===================================
        /** セッションからプランIDを取得する */
        //===================================
        //===================================
        /** 記事一覧情報取得処理 */
        //===================================
        $articles_query = Articles::query();
        $articles_query->where('delete_flag', '=', 0);
        $articles_list = $articles_query->orderBy('created_at', 'desc')->paginate(9);
        //===================================
        /** キーワードと説明の設定処理 */
        //===================================
        $this->keywords = Master::getKeywords();
        $this->description = Master::getDescription();
        //===================================
        /** 画面へ渡すパラメータ設定処理 */
        //===================================
        $this->data['body_id'] = 'home';
        $this->data['articles_list'] = $articles_list;
        $this->data['keywords'] = $this->keywords;
        $this->data['description'] = $this->description;
        //===================================
        /** 記事画面を呼び出す */
        //===================================
        return view('articles.index', $this->data);
    }

    /**
     * 記事詳細画面の表示
     *
     * @return view 記事画面
     */
    public function show($articles_id) {
        //===================================
        /** セッションからプランIDを取得する */
        //===================================
        //===================================
        /** 記事一覧情報取得処理 */
        //===================================
        $articles_query = Articles::query();
        $articles_query->where('delete_flag', '=', 0);
        $articles_query->where('number', '=', $articles_id);
        $articles = $articles_query->first();


        //===================================
        /** キーワードと説明の設定処理 */
        //===================================
        if ($articles['keywords'] != null && $articles['keywords'] != '') {
            $this->keywords = $articles['keywords'];
        } else {
            $this->keywords = Master::getKeywords();
        }
        if ($articles['description'] != null && $articles['description'] != '') {
            $this->description = $articles['description'];
        } else {
            $this->description = Master::getDescription();
        }

        //===================================
        /** 画面へ渡すパラメータ設定処理 */
        //===================================
        $this->data['articles'] = $articles;
        $this->data['articles_id'] = $articles['id'];
        $this->data['body_id'] = 'home';
        $this->data['keywords'] = $this->keywords;
        $this->data['description'] = $this->description;

        //===================================
        /** 記事画面を呼び出す */
        //===================================
        return view('articles.show.index', $this->data);
    }

    /**
     * 記事作成画面の表示
     *
     * @return view 記事画面
     */
    public function create() {
        //===================================
        /** セッションからプランIDを取得する */
        //===================================
        $this->data['body_id'] = 'home';

        //===================================
        /** 記事画面を呼び出す */
        //===================================
        return view('articles.create.index', $this->data);
    }

    /**
     * 記事作成画面の表示
     *
     * @return view 記事画面
     */
    public function create_confirm(Request $request) {
        //===================================
        /** セッションからプランIDを取得する */
        //===================================
        //===================================
        /** 入力した医療施設情報を取得する */
        //===================================
        $articles['title'] = Input::get('title');             // 記事タイトル
        $articles['image'] = Input::get('image');             // 記事画像
        $articles['image_link'] = Input::get('image_link');   // 記事画像リンク
        $articles['image_alt'] = Input::get('image_alt');   // 記事画像リンク
        $articles['category'] = Input::get('category');       // 記事カテゴリ
        $articles['keywords'] = Input::get('keywords');       // 記事キーワード
        $articles['description'] = Input::get('description'); // 記事説明
        $articles['content'] = Input::get('content');         // 記事内容
        //===================================
        /** アップロード画像を処理する */
        //===================================
        $articles['image'] = Common::imageUploadTemp($request->file('image'));

        //===================================
        /** 画面へ渡すパラメータ設定処理 */
        //===================================
        $this->data['articles'] = $articles;
        Session::put('new_articles', $articles);
        $this->data['keywords'] = $articles['keywords'];
        $this->data['description'] = $articles['description'];
        $this->data['body_id'] = 'araticles';

        //===================================
        /** 記事画面を呼び出す */
        //===================================
        return view('articles.create.confirm', $this->data);
    }

    /**
     * 記事登録
     *
     * @return view 記事画面
     */
    public function store() {
        //===================================
        /** セッションから医療施設情報を取得する */
        //===================================
        $articles = Session::get('new_articles');               // 記事情報
        //===================================
        /** 新規登録する医療施設番号を取得する */
        //===================================
        $articles_query = Articles::query();
        $articles_number = $articles_query->whereNotNull('number')->max('number');
        if (empty($articles_number)) {
            $articles['number'] = "articles-00000001";
        } else {
            $articles['number'] = Common::getInsertArticlesNumber($articles_number);
        }
        try {
            // トランザクション開始
            DB::beginTransaction();
            //===================================
            /** 記事情報を登録する */
            //===================================
            $new_articles = new Articles;
            $new_articles->number = $articles['number'];           // 記事番号
            $new_articles->category = $articles['category'];       // 記事カテゴリ
            $new_articles->title = $articles['title'];             // 記事タイトル
            $new_articles->content = $articles['content'];         // 記事コンテンツ
            $new_articles->image = $articles['image'];             // 記事画像
            $new_articles->image_link = $articles['image_link'];   // 記事画像リンク
            $new_articles->image_alt = $articles['image_alt'];     // 記事画像説明
            $new_articles->keywords = $articles['keywords'];       // 記事キーワード
            $new_articles->description = $articles['description']; // 記事説明
            $new_articles->save();
            //===================================
            /** アップロード画像を移動する */
            //===================================
            if (!empty($articles['image'])) {
                Common::moveImageFile('articles', $articles['number'], $articles['image']);
                Common::resizeImageFile('articles', $articles['number'], $articles['image']);
            }
            // コミット
            DB::commit();
        } catch (Exception $e) {
            // ロールバック
            DB::rollBack();
            return Redirect::back();
        }
        //===================================
        /** 記事一覧画面へリダイレクトする */
        //===================================
        return redirect()->guest('articles');
    }

    /**
     * 記事編集画面の表示
     *
     * @return view 記事画面
     */
    public function edit() {
        //===================================
        /** セッションからプランIDを取得する */
        //===================================
        $this->data['body_id'] = 'home';

        //===================================
        /** 記事画面を呼び出す */
        //===================================
        return view('articles.index', $this->data);
    }

    /**
     * 記事更新画面の表示
     *
     * @return view 記事画面
     */
    public function update() {
        //===================================
        /** セッションからプランIDを取得する */
        //===================================
        $this->data['body_id'] = 'home';

        //===================================
        /** 記事画面を呼び出す */
        //===================================
        return view('articles.index', $this->data);
    }

    /**
     * 記事削除画面の表示
     *
     * @return view 記事画面
     */
    public function delete() {
        //===================================
        /** セッションからプランIDを取得する */
        //===================================
        $this->data['body_id'] = 'home';

        //===================================
        /** 記事画面を呼び出す */
        //===================================
        return view('articles.index', $this->data);
    }

}
