<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hoge', function () {
    return "hoge";
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'login' => true, // メール確認機能（※5.7系以上のみ）
    'verify' => true, // メール確認機能（※5.7系以上のみ）
    'register' => true, // デフォルトの登録機能OFF
    'reset' => true, // メールリマインダー機能ON
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
