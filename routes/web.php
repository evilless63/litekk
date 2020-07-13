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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes(['register' => false]);
Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('articles', 'ArticleController');
    Route::resource('emails', 'EmailController');
    Route::resource('news', 'NewsController');
    Route::resource('tagArticle', 'TagsArticleController');
    Route::resource('categoryArticle', 'CategoriesArticleController');
    Route::resource('categoryNews', 'CategoriesNewsController');
    Route::get('/', 'AdminController@index');
});
