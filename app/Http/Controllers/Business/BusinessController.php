<?php

namespace App\Http\Controllers\Business;

use App\Articles;
use App\Common\Master;
use App\Http\Controllers\Controller;
use function view;

/**
 * ビジネス_コントロール
 *
 * @author kimC
 */
class BusinessController extends Controller {

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
        $this->data['categorys'] = Master::findBusinessCategorys();
    }

    /**
     * ネットビジネスホーム画面の表示
     *
     * @return view HOME画面
     */
    public function index() {
        //===================================
        /** セッションからプランIDを取得する */
        //===================================
        $this->data['body_id'] = 'business_home';
        //===================================
        /** 記事一覧情報取得処理 */
        //===================================
        $articles_query = Articles::query();
        $articles_query->where('category_1', '=', 1);
        $articles_query->where('delete_flag', '=', 0);
        $articles_list = $articles_query->orderBy('created_at', 'desc')->paginate(9);

        $recommend_query = Articles::query();
        $recommend_query->where('category_1', '=', 1);
        $recommend_query->where('delete_flag', '=', 0);
        $recommend_query->where('recommend', '=', 1);
        $recommend_list = $recommend_query->orderBy('display_sort', 'asc')->paginate(7);

        //===================================
        /** キーワードと説明の設定処理 */
        //===================================
        $this->keywords = Master::getKeywords();
        $this->description = Master::getDescription();
        //===================================
        /** 画面へ渡すパラメータ設定処理 */
        //===================================
        $this->data['articles_list'] = $articles_list;
        $this->data['recommend_list'] = $recommend_list;
        $this->data['keywords'] = $this->keywords;
        $this->data['description'] = $this->description;
        //===================================
        /** HOMT画面を呼び出す */
        //===================================
        return view('category.index', $this->data);
    }

}
