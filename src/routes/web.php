<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postTestController;

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

Route::get('/hello', function () {
    return view('hello', ['name' => "Hello World."]);
});



Route::get('inputForm', [postTestController::class,'inputForm']); // 入力フォーム画面(inputForm)のURL割当、起動コントローラ・関数指定
Route::post('formPost', [postTestController::class,'formPost']); // 入力フォーム画面(inputForm)のURL割当、起動コントローラ・関数指定
// Route::get('inputForm', 'postTestController@inputForm');//結果画面(resultPage)のURL割当、起動コントローラ・関数指定
// Route::post('formPost', 'postTestController@formPost');//結果画面(resultPage)のURL割当、起動コントローラ・関数指定
