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

Route::get('/', 'SiteController@index')->name('site.index');
Route::get('/o-kompanii', 'SiteController@company')->name('site.company');
Route::get('/novosti', 'SiteController@news')->name('site.news');
Route::get('/novosti/{categoryslug}/{slug}', 'SiteController@onenews')->name('site.onenews');
Route::get('/stati', 'SiteController@articles')->name('site.articles');
Route::get('/stati/{categoryslug}/{slug}', 'SiteController@onearticle')->name('site.onearticle');
Route::get('/dostavka', 'SiteController@delivery')->name('site.delivery');
Route::get('/kontakty', 'SiteController@contacts')->name('site.contacts');

// products
Route::get('products/telega', 'SiteController@telega')->name('products.telega');
Route::get('products/parts', 'SiteController@parts')->name('products.parts'); //TODO VIEW
Route::get('products/p1pm2', 'SiteController@p1pm2')->name('products.p1pm2');
Route::get('products/p1pna', 'SiteController@p1pna')->name('products.p1pna');
Route::get('products/p2r', 'SiteController@p2r')->name('products.p2r');
Route::get('products/p2rn', 'SiteController@p2rn')->name('products.p2rn');
Route::get('products/rolgang', 'SiteController@rolgang')->name('products.rolgang');
Route::get('products/t001', 'SiteController@t001')->name('products.t001');
Route::get('products/t003', 'SiteController@t003')->name('products.t003');
Route::get('products/t004', 'SiteController@t004')->name('products.t004');
Route::get('products/tm2', 'SiteController@tm2')->name('products.tm2');

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
