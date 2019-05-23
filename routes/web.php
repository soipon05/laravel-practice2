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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

// 会員登録処理
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('auth/register', 'Auth\RegisterController@register');

// ログイン処理
Route::get('/auth/login', 'Auth\LoginController@showLoginForm');
Route::post('/auth/login', 'Auth\LoginController@Login');

// ログアウト処理
Route::get('/auth/logout', 'Auth\LoginController@logout');

// マイページ
Route::get('/mypage', function () {
    return view('/home');
});

// App\Http\Controller\AddTaskActionの__invokeメソッドを実行
Route::post('/tasks', 'AddTaskAction');
