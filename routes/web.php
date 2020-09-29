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
Route::get('/politika', 'SiteController@policy')->name('site.policy');

// products
Route::get('products/p1rbg', 'SiteController@p1rbg')->name('products.p1rbg');
Route::get('products/parts', 'SiteController@parts')->name('products.parts'); //TODO VIEW
// Route::get('products/p1pm2', 'SiteController@p1pm2')->name('products.p1pm2');
Route::get('products/p1pm3shnk', 'SiteController@p1pm3shnk')->name('products.p1pm3shnk');
Route::get('products/p1pna', 'SiteController@p1pna')->name('products.p1pna');
Route::get('products/p2r', 'SiteController@p2r')->name('products.p2r');
Route::get('products/p2rn', 'SiteController@p2rn')->name('products.p2rn');
Route::get('products/p3rpsh', 'SiteController@p3rpsh')->name('products.p3rpsh');
Route::get('products/phrbg', 'SiteController@phrbg')->name('products.phrbg');
Route::get('products/p1kpm', 'SiteController@p1kpm')->name('products.p1kpm');
Route::get('products/p2pm2n', 'SiteController@p2pm2n')->name('products.p2pm2n');
Route::get('products/pet', 'SiteController@pet')->name('products.pet');
Route::get('products/p2rv', 'SiteController@p2rv')->name('products.p2rv');

Route::get('products/3dmodel/{slug}', function($slug) {
    return view('user.3dmodels.3dmodel')->with(['path' => asset('3dmodels/' . $slug . '/' . $slug ) ]);
})->name('3dmodel');

Route::resource('emails', 'EmailController');

// Auth::routes(['register' => false]);
Auth::routes(['register' => false, 'request' => false, 'reset' => false]);

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('articles', 'ArticleController');    
    Route::resource('news', 'NewsController');
    Route::resource('tagArticle', 'TagsArticleController');
    Route::resource('categoryArticle', 'CategoriesArticleController');
    Route::resource('categoryNews', 'CategoriesNewsController');
    Route::get('/', 'AdminController@index');
});
