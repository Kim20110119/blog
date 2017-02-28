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
     * カテゴリリストを取得する
     *
     * @return array $categorys
     */
    public static function findCategorys() {
        return array(
            '1' => 'ポイント',
            '2' => 'トラフィックスチェンジ',
            '3' => 'アフィリエイト',
            '4' => 'ネットビジネス',
            '5' => 'SEO',
            '6' => 'メルマガ',
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
