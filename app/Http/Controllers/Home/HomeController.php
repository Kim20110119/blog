<?php

namespace App\Http\Controllers\Home;

use App\Articles;
use App\Common\Common;
use App\Common\Master;
use App\Http\Controllers\Controller;
use function view;

/**
 * HOME_コントロール
 *
 * @author kimC
 */
class HomeController extends Controller {

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
        $this->data['categorys'] = Common::getCategoryList();
    }

    /**
     * HOME画面の表示
     *
     * @return view HOME画面
     */
    public function index() {
        //===================================
        /** セッションからプランIDを取得する */
        //===================================
        $this->data['body_id'] = 'home';
        //===================================
        /** 記事一覧情報取得処理 */
        //===================================
        $articles_query = Articles::query();
        $articles_list = $articles_query->orderBy('created_at', 'desc')->paginate(9);

        //===================================
        /** キーワードと説明の設定処理 */
        //===================================
        $this->keywords = Master::getKeywords();
        $this->description = Master::getDescription();
        //===================================
        /** 画面へ渡すパラメータ設定処理 */
        //===================================
        $this->data['articles_list'] = $articles_list;
        $this->data['keywords'] = $this->keywords;
        $this->data['description'] = $this->description;
        //===================================
        /** HOMT画面を呼び出す */
        //===================================
        return view('home.index', $this->data);
    }

    /**
     * 利用規約画面の表示
     *
     * @return view 利用規約画面
     */
    public function terms() {
        $this->data['body_id'] = 'terms';
        //===================================
        /** 利用規約画面を呼び出す */
        //===================================
        return view('front.terms.index', $this->data);
    }

    /**
     * 交通事故総合サポートセンター画面の表示
     *
     * @return view 利用規約画面
     */
    public function about_us() {
        $this->data['body_id'] = 'about_us';
        //===================================
        /** 利用規約画面を呼び出す */
        //===================================
        return view('front.about_us.index', $this->data);
    }

    /**
     * 運営会社情報画面の表示
     *
     * @return view 運営会社情報画面
     */
    public function company() {
        $this->data['body_id'] = 'company';
        //===================================
        /** 運営会社情報画面を呼び出す */
        //===================================
        return view('front.company.index', $this->data);
    }

    /**
     * プライバシーポリシー画面の表示
     *
     * @return view プライバシーポリシー画面
     */
    public function privacy_policy() {
        $this->data['body_id'] = 'terms';
        //===================================
        /** プライバシーポリシー画面を呼び出す */
        //===================================
        return view('front.privacy_policy.index', $this->data);
    }

}
