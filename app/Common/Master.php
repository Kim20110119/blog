<?php

namespace App\Common;

use Illuminate\Support\Collection;

class Master {

    /**
     * マスタ情報配列を取得する
     *
     * @return array $list
     */
    public static function getList() {

    }

    /**
     * マスタ名を取得する
     *
     * @return array $name
     */
    public static function getName() {

    }

    /**
     * テゴリリストを取得する
     *
     * @return array $categorys
     */
    public static function findCategorys() {
        return array(
            '1' => 'ネットビジネス',
            '2' => 'ネット知識',
            '3' => 'ネット雑談',
        );
    }

    /**
     * キーによりカテゴリを取得する
     *
     * @param String $key
     * @return String $category
     */
    public static function getCategory($key) {
        return Collection::make(Master::findCategorys())->get($key);
    }

    /**
     * ネットビジネスカテゴリリストを取得する
     *
     * @return array $business_categorys
     */
    public static function findBusinessCategorys() {
        return array(
            '1' => 'ポイント稼ぎ',
            '2' => 'トラフィックスチェンジ',
            '3' => 'アフィリエイト',
            '4' => 'ネットビジネス',
            '5' => 'SEO',
            '6' => 'メルマガ',
        );
    }

    /**
     * キーによりネットビジネスカテゴリを取得する
     *
     * @param String $key
     * @return String $business_category
     */
    public static function getBusinessCategory($key) {
        return Collection::make(Master::findBusinessCategorys())->get($key);
    }

    /**
     * お勧めフラグリストを取得する
     *
     * @return array $recommends
     */
    public static function findRecommends() {
        return array(
            '0' => 'いいえ',
            '1' => 'はい',
        );
    }

    /**
     * キーによりお勧めフラグを取得する
     *
     * @param String $key
     * @return String $recommend
     */
    public static function getRecommend($key) {
        return Collection::make(Master::findRecommends())->get($key);
    }

    /**
     * キーワードを取得する
     *
     * @return String $keywords
     */
    public static function getKeywords() {
        return "富フリー,副業,お小遣い稼ぎ,ポイントサイト稼ぎ,アフィリエイト,ネットビジネス,中国輸入,メルカリ";
    }

    /**
     * 説明を取得する
     *
     * @return String $description
     */
    public static function getDescription() {
        return "ネット副業の紹介サイトです。月に1万円〜30万円稼ぐことができるオススメのネット副業をご紹介。ネットやパソコンだけあればとこでもできる副業、手軽な副業、高収入の副業まで、どんな特徴があるのか詳しく紹介しています。";
    }

}
