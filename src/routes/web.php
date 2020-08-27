<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductsController@getAll')->name('products-all');

Route::get('/products/{id}', 'ProductsController@getDetail')->name('products-detail');

Route::post('/review/create', 'ReviewsController@createSubmit')->name('review-create');

Route::group(['prefix' => '/admin', 'as' => 'admin.'], function() {

    Route::get('/', 'Admin\AdminController@panel')->name('index');

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

});

Route::get('/admin/statuses', 'Admin\StatusesController@getAll')->name('admin-statuse-all');
Route::get('/admin/statuses/create', 'Admin\StatusesController@create')->name('admin-statuse-create');
Route::post('/admin/statuses/create', 'Admin\StatusesController@createSubmit')->name('admin-statuse-create-submit');
Route::get('/admin/statuses/{id}', 'Admin\StatusesController@getDetail')->name('admin-statuse-detail');
Route::get('/admin/statuses/{id}/update', 'Admin\StatusesController@update')->name('admin-statuse-update');
Route::post('/admin/statuses/{id}/update', 'Admin\StatusesController@updateSubmit')->name('admin-statuse-update-submit');
Route::get('/admin/statuses/{id}/delete', 'Admin\StatusesController@delete')->name('admin-statuse-delete');

Route::get('/admin/reviews', 'Admin\ReviewsController@getAll')->name('admin-review-all');
Route::get('/admin/reviews/create', 'Admin\ReviewsController@create')->name('admin-review-create');
Route::post('/admin/reviews/create', 'Admin\ReviewsController@createSubmit')->name('admin-review-create-submit');
Route::get('/admin/reviews/{id}', 'Admin\ReviewsController@getDetail')->name('admin-review-detail');
Route::get('/admin/reviews/{id}/update', 'Admin\ReviewsController@update')->name('admin-review-update');
Route::post('/admin/reviews/{id}/update', 'Admin\ReviewsController@updateSubmit')->name('admin-review-update-submit');
Route::get('/admin/reviews/{id}/delete', 'Admin\ReviewsController@delete')->name('admin-review-delete');

Auth::routes();
