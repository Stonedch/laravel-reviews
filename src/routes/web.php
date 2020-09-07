<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix' => '/', 'as' => 'site.', 'middleware' => 'locale'], function() {
    Route::get('/', 'Site\IndexController@index')->name('index');
    Route::get('/locale/{locale}', 'Site\LanguageController@setLocale')->name('locale');
    Route::group(['prefix' => '/product', 'as' => 'product.'], function() {
        Route::get('/all', 'Site\ProductController@index')->name('index');
        Route::get('/{slug}', 'Site\ProductController@show')->name('show');
    });
    Route::group(['prefix' => '/review', 'as' => 'review.'], function() {
        Route::post('/store', 'Site\ReviewController@store')->name('store');
    });
});

Route::group(['prefix' => '/admin', 'as' => 'admin.', 'middleware' => ['admin', 'locale']], function() {

    Route::get('/', 'Admin\AdminController@index')->name('index');

    Route::group(['prefix' => '/user', 'as' => 'user.'], function() {
        Route::get('/all', 'Admin\UserController@index')->name('index');
        Route::get('/create', 'Admin\UserController@create')->name('create');
        Route::post('/store', 'Admin\UserController@store')->name('store');
        Route::get('/{id}', 'Admin\UserController@show')->name('show');
        Route::get('/{id}/edit', 'Admin\UserController@edit')->name('edit');
        Route::post('/{id}/update', 'Admin\UserController@update')->name('update');
        Route::get('/{id}/edit/password', 'Admin\UserController@editPassword')->name('edit.password');
        Route::post('/{id}/update/password', 'Admin\UserController@updatePassword')->name('update.password');
        Route::get('/{id}/destroy', 'Admin\UserController@destroy')->name('destroy');
    });

    Route::group(['prefix' => '/role', 'as' => 'role.'], function() {
        Route::get('/all', 'Admin\RoleController@index')->name('index');
        Route::get('/create', 'Admin\RoleController@create')->name('create');
        Route::post('/store', 'Admin\RoleController@store')->name('store');
        Route::get('/{id}', 'Admin\RoleController@show')->name('show');
        Route::get('/{id}/edit', 'Admin\RoleController@edit')->name('edit');
        Route::post('/{id}/update', 'Admin\RoleController@update')->name('update');
        Route::get('/{id}/destroy', 'Admin\RoleController@destroy')->name('destroy');
    });

    Route::group(['prefix' => '/product', 'as' => 'product.'], function() {
        Route::get('/all', 'Admin\ProductController@index')->name('index');
        Route::get('/create', 'Admin\ProductController@create')->name('create');
        Route::post('/store', 'Admin\ProductController@store')->name('store');
        Route::get('/{id}', 'Admin\ProductController@show')->name('show');
        Route::get('/{id}/edit', 'Admin\ProductController@edit')->name('edit');
        Route::post('/{id}/update', 'Admin\ProductController@update')->name('update');
        Route::get('/{id}/destroy', 'Admin\ProductController@destroy')->name('destroy');
    });

    Route::group(['prefix' => '/status', 'as' => 'status.'], function() {
        Route::get('/all', 'Admin\StatusController@index')->name('index');
        Route::get('/create', 'Admin\StatusController@create')->name('create');
        Route::post('/store', 'Admin\StatusController@store')->name('store');
        Route::get('/{id}', 'Admin\StatusController@show')->name('show');
        Route::get('/{id}/edit', 'Admin\StatusController@edit')->name('edit');
        Route::post('/{id}/update', 'Admin\StatusController@update')->name('update');
        Route::get('/{id}/destroy', 'Admin\StatusController@destroy')->name('destroy');
    });
    Route::group(['prefix' => '/review', 'as' => 'review.'], function() {
        Route::get('/all', 'Admin\ReviewController@index')->name('index');
        Route::get('/create', 'Admin\ReviewController@create')->name('create');
        Route::post('/store', 'Admin\ReviewController@store')->name('store');
        Route::get('/{id}', 'Admin\ReviewController@show')->name('show');
        Route::get('/{id}/edit', 'Admin\ReviewController@edit')->name('edit');
        Route::post('/{id}/update', 'Admin\ReviewController@update')->name('update');
        Route::get('/{id}/destroy', 'Admin\ReviewController@destroy')->name('destroy');
    });

});
