<?php

/*
  |--------------------------------------------------------------------------
  | フロント側ルーティング
  |--------------------------------------------------------------------------
 */
// HOME画面
Route::get('/', 'Home\HomeController@index');
// 記事一覧画面
Route::get('business', 'Business\BusinessController@index');
// 記事一覧画面
Route::get('business/articles', 'Articles\ArticlesController@index');
// 記事一覧画面
Route::get('business/articles/show/{articles_id}', 'Articles\ArticlesController@show');

/*
  |--------------------------------------------------------------------------
  | 管理側ルーティング
  |--------------------------------------------------------------------------
 */
// HOME画面
Route::get('admin', 'Admin\HomeController@index');
// 記事一覧画面
Route::get('admin/articles', 'Admin\ArticlesController@index');
// 記事一覧画面
Route::get('admin/articles/show/{articles_id}', 'Admin\ArticlesController@show');
// 記事作成画面
Route::get('admin/articles/create', 'Admin\ArticlesController@create');
// 記事確認画面
Route::post('admin/articles/create_confirm', 'Admin\ArticlesController@create_confirm');
// 記事登録
Route::post('admin/articles/store', 'Admin\ArticlesController@store');
// 記事編集画面
Route::get('admin/articles/edit/{articles_id}', 'Admin\ArticlesController@edit');
// 記事編集確認画面
Route::post('admin/articles/edit_confirm', 'Admin\ArticlesController@edit_confirm');
// 記事編集
Route::post('admin/articles/update', 'Admin\ArticlesController@update');
// 記事掲載解除
Route::get('admin/articles/delete/{articles_id}', 'Admin\ArticlesController@delete');
// 記事掲載再開
Route::get('admin/articles/resumption/{articles_id}', 'Admin\ArticlesController@resumption');



Route::auth();

Route::get('/home', 'HomeController@index');
