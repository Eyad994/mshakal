<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products/{id}', 'ProductController@getProductByCategory');

Route::get('/product/{slug}', 'ProductController@getProductBySlug');

/******** cart *********/

Route::get('cart/cartBody', 'CartController@cartBody');
Route::resource('cart', 'CartController');

/***********************/
