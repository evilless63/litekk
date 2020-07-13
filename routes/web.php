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
Route::get('product/telega', 'SiteController@telega')->name('product.telega');
Route::get('product/parts', 'SiteController@parts')->name('product.parts');
Route::get('product/p1pm2', 'SiteController@p1pm2')->name('product.p1pm2');
Route::get('product/p1pna', 'SiteController@p1pna')->name('product.p1pna');
Route::get('product/p2r', 'SiteController@p2r')->name('product.p2r');
Route::get('product/p2rn', 'SiteController@p2rn')->name('product.p2rn');
Route::get('product/rolgang', 'SiteController@rolgang')->name('product.rolgang');
Route::get('product/t001', 'SiteController@t001')->name('product.t001');
Route::get('product/t003', 'SiteController@t003')->name('product.t003');
Route::get('product/t004', 'SiteController@contacts')->name('product.t004');
Route::get('product/tm2', 'SiteController@contacts')->name('product.tm2');

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
