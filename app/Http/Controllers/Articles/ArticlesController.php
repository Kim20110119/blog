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
            $this->data['title'] = '富フリー之ネットビジネス記事一覧';
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
        $articles_list = $articles_query->orderBy('created_at', 'desc')->get();
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
        $this->data['title'] = $articles['title'];

        //===================================
        /** 記事画面を呼び出す */
        //===================================
        return view('articles.show.index', $this->data);
    }

}
