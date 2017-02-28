<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * カテゴリテーブル
 */
class Category extends Model {

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * モデルのタイムスタンプを更新するかの指示
     *
     * @var bool
     */
    public $timestamps = false;

}
