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
Auth::routes();

Route::get('/', 'MoritaController@home');
Route::get('/home', 'MoritaController@home')->name('home');
Route::get('/menu/{menu_id}', 'MoritaController@menu');
Route::get('/news', 'MoritaController@news')->name('news');
Route::get('/news/page/{page_id}', 'MoritaController@news_page');
Route::get('/news/page/{searh}/{page_id}', 'MoritaController@news_search_page');
Route::get('/news/{searh}/{key}', 'MoritaController@news_search');
Route::get('/news/{news_id}', 'MoritaController@news_show');
Route::get('/consept', 'MoritaController@consept')->name('consept');
Route::get('/access', 'MoritaController@access')->name('access');


//Backside
Route::get('/backside', 'BacksideController@index');

Route::group(['namespace' => 'Shop'], function(){
    Route::resource('/backside/shop', 'ShopController');
});

Route::group(['namespace' => 'Page'], function(){
    Route::delete('backside/page/{page_id}/deletereserve/{reserve_id}', 'PageController@destroy_reserve');
    Route::put('/backside/page/changebanner/{page_id}', 'PageController@changebanner');
    Route::resource('/backside/page', 'PageController');
});

Route::group(['namespace' => 'Product'], function(){
    Route::get('/backside/product/search', 'ProductController@search');
    Route::put('/backside/product/update_issell/{product_id}', 'ProductController@update_issell');
    Route::put('/backside/product/update_selldate/{product_id}', 'ProductController@update_selldate');
    Route::resource('/backside/product', 'ProductController');

    Route::resource('/backside/productkategorie', 'ProductkategorieController');
});

Route::group(['namespace' => 'News'], function(){
    Route::resource('/backside/news', 'NewsController');
    Route::resource('/backside/newstag', 'NewstagController');
    Route::resource('/backside/newskategorie', 'NewskategorieController');
});