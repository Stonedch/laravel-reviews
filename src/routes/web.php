<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductsController@getAll')->name('products-all');

Route::get('/products/{id}', 'ProductsController@getDetail')->name('products-detail');

Route::get('/admin/', 'Admin\AdminController@panel')->name('admin-panel');

Route::get('/admin/users', 'Admin\UsersController@getAll')->name('admin-user-all');
Route::get('/admin/users/create', 'Admin\UsersController@create')->name('admin-user-create');
Route::post('/admin/users/create', 'Admin\UsersController@createSubmit')->name('admin-user-create-submit');
Route::get('/admin/users/{id}', 'Admin\UsersController@getDetail')->name('admin-user-detail');
Route::get('/admin/users/{id}/update', 'Admin\UsersController@update')->name('admin-user-update');
Route::post('/admin/users/{id}/update', 'Admin\UsersController@updateSubmit')->name('admin-user-update-submit');
Route::get('/admin/users/{id}/update-password', 'Admin\UsersController@updatePassword')->name('admin-user-update-password');
Route::post('/admin/users/{id}/update-password', 'Admin\UsersController@updatePasswordSubmit')->name('admin-user-update-password-submit');
Route::get('/admin/users/{id}/delete', 'Admin\UsersController@delete')->name('admin-user-delete');

Route::get('/admin/products', 'Admin\ProductsController@getAll')->name('admin-product-all');
Route::get('/admin/products/create', 'Admin\ProductsController@create')->name('admin-product-create');
Route::post('/admin/products/create', 'Admin\ProductsController@createSubmit')->name('admin-product-create-submit');
Route::get('/admin/products/{id}', 'Admin\ProductsController@getDetail')->name('admin-product-detail');
Route::get('/admin/products/{id}/update', 'Admin\ProductsController@update')->name('admin-product-update');
Route::post('/admin/products/{id}/update', 'Admin\ProductsController@updateSubmit')->name('admin-product-update-submit');
Route::get('/admin/products/{id}/delete', 'Admin\ProductsController@delete')->name('admin-product-delete');

Auth::routes();

