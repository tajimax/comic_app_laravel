<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 小説一覧画面を表示
Route::get('/', 'NovelController@showList')->name('novels');
// 小説一覧画面を表示
Route::get('/novel/mypage', 'NovelController@showMypage')->name('mypage');
// 小説一覧画面を表示
Route::get('/novel/otherUser', 'NovelController@showOtherUserPage')->name('otherUser');
// 小説登録画面を表示
Route::get('/novel/create', 'NovelController@showCreate')->name('create');
// 小説を登録
Route::post('/', 'NovelController@exeStore')->name('store');


Route::get('person', 'PersonController@index');