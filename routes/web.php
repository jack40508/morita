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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/backside', 'BacksideController@index');

Route::group(['namespace' => 'Shop'], function(){
    Route::resource('/backside/shop', 'ShopController');
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