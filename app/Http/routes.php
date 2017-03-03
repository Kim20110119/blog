<?php

/*
  |--------------------------------------------------------------------------
  | kimyea側ルーティング
  |--------------------------------------------------------------------------
 */
// HOME画面
Route::get('/', 'Home\HomeController@index');
// 記事一覧画面
Route::get('articles', 'Articles\ArticlesController@index');
// 記事一覧画面
Route::get('articles/show/{articles_id}', 'Articles\ArticlesController@show');
// 記事作成画面
Route::get('articles/create', 'Articles\ArticlesController@create');
// 記事確認画面
Route::post('articles/create_confirm', 'Articles\ArticlesController@create_confirm');
// 記事登録
Route::post('articles/store', 'Articles\ArticlesController@store');
