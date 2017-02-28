<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * 記事テーブル
 */
class Articles extends Model {

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * モデルのタイムスタンプを更新するかの指示
     *
     * @var bool
     */
    public $timestamps = false;

}
