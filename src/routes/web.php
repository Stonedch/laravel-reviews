<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductsController@getAll')->name('products-all');

Route::get('/products/{id}', 'ProductsController@getDetail')->name('products-detail');

Auth::routes();

