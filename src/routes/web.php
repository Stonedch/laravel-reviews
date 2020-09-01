<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductsController@getAll')->name('products-all');

Route::get('/products/{id}', 'ProductsController@getDetail')->name('products-detail');

Route::post('/review/create', 'ReviewsController@createSubmit')->name('review-create');

Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => 'admin'], function() {

    Route::get('/', 'Admin\AdminController@index')->name('index');

    Route::group(['prefix' => '/users', 'as' => 'users.'], function() {
        Route::get('/', 'Admin\UsersController@getAll')->name('index');
        Route::get('/create', 'Admin\UsersController@create')->name('create');
        Route::post('/create', 'Admin\UsersController@createSubmit')->name('create');
        Route::get('/{id}', 'Admin\UsersController@getDetail')->name('detail');
        Route::get('/{id}/update', 'Admin\UsersController@update')->name('update');
        Route::post('/{id}/update', 'Admin\UsersController@updateSubmit')->name('update');
        Route::get('/{id}/update-password', 'Admin\UsersController@updatePassword')->name('update.password');
        Route::post('/{id}/update-password', 'Admin\UsersController@updatePasswordSubmit')->name('update.password');
        Route::get('/{id}/delete', 'Admin\UsersController@delete')->name('delete');
    });

    Route::group(['prefix' => '/products', 'as' => 'products.'], function() {
        Route::get('/', 'Admin\ProductsController@getAll')->name('index');
        Route::get('/create', 'Admin\ProductsController@create')->name('create');
        Route::post('/create', 'Admin\ProductsController@createSubmit')->name('create');
        Route::get('/{id}', 'Admin\ProductsController@getDetail')->name('detail');
        Route::get('/{id}/update', 'Admin\ProductsController@update')->name('update');
        Route::post('/{id}/update', 'Admin\ProductsController@updateSubmit')->name('update');
        Route::get('/{id}/delete', 'Admin\ProductsController@delete')->name('delete');
    });

    Route::group(['prefix' => '/statuses', 'as' => 'statuses.'], function() {
        Route::get('/', 'Admin\StatusesController@getAll')->name('index');
        Route::get('/create', 'Admin\StatusesController@create')->name('create');
        Route::post('/create', 'Admin\StatusesController@createSubmit')->name('create');
        Route::get('/{id}', 'Admin\StatusesController@getDetail')->name('detail');
        Route::get('/{id}/update', 'Admin\StatusesController@update')->name('update');
        Route::post('/{id}/update', 'Admin\StatusesController@updateSubmit')->name('update');
        Route::get('/{id}/delete', 'Admin\StatusesController@delete')->name('delete');
    });

    Route::group(['prefix' => '/reviews', 'as' => 'reviews.'], function() {
        Route::get('/', 'Admin\ReviewsController@getAll')->name('index');
        Route::get('/create', 'Admin\ReviewsController@create')->name('create');
        Route::post('/create', 'Admin\ReviewsController@createSubmit')->name('create');
        Route::get('/{id}', 'Admin\ReviewsController@getDetail')->name('detail');
        Route::get('/{id}/update', 'Admin\ReviewsController@update')->name('update');
        Route::post('/{id}/update', 'Admin\ReviewsController@updateSubmit')->name('update');
        Route::get('/{id}/delete', 'Admin\ReviewsController@delete')->name('delete');
    });

});

