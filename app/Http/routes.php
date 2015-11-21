<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/auth', function () {
    return view('auth.login');
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth.checkrole', 'as'=>'admin.'], function(){

    Route::group(['prefix'=>'categories', 'as'=>'categories.'], function() {
        Route::get('', ['as' => 'index', 'uses' => 'CategoriesController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'CategoriesController@create']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'CategoriesController@edit']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'CategoriesController@update']);
        Route::post('/store', ['as' => 'store', 'uses' => 'CategoriesController@store']);
        Route::get('/destroy/{id}', ['as' => 'destroy', 'uses' => 'CategoriesController@destroy']);
    });

    Route::get('products',['as'=>'products.index', 'uses' => 'ProductsController@index']);
    Route::get('products/create',['as'=>'products.create', 'uses'=>'ProductsController@create']);
    Route::get('products/edit/{id}',['as'=>'products.edit', 'uses'=>'ProductsController@edit']);
    Route::post('/products/update/{id}',['as'=>'products.update', 'uses'=>'ProductsController@update']);
    Route::post('products/store',['as'=>'products.store', 'uses'=>'ProductsController@store']);
    Route::get('products/destroy/{id}',['as'=>'products.destroy', 'uses'=>'ProductsController@destroy']);

    Route::get('users',['as'=>'users.index', 'uses' => 'UsersController@index']);
    Route::get('users/create',['as'=>'users.create', 'uses'=>'UsersController@create']);
    Route::get('users/edit/{id}',['as'=>'users.edit', 'uses'=>'UsersController@edit']);
    Route::post('/users/update/{id}',['as'=>'users.update', 'uses'=>'UsersController@update']);
    Route::post('users/store',['as'=>'users.store', 'uses'=>'UsersController@store']);
    Route::get('users/destroy/{id}',['as'=>'users.destroy', 'uses'=>'UsersController@destroy']);

    Route::get('clients',['as'=>'clients.index', 'uses' => 'ClientsController@index']);
    Route::get('clients/create',['as'=>'clients.create', 'uses'=>'ClientsController@create']);
    Route::get('clients/edit/{id}',['as'=>'clients.edit', 'uses'=>'ClientsController@edit']);
    Route::post('/clients/update/{id}',['as'=>'clients.update', 'uses'=>'ClientsController@update']);
    Route::post('clients/store',['as'=>'clients.store', 'uses'=>'ClientsController@store']);
    Route::get('clients/destroy/{id}',['as'=>'clients.destroy', 'uses'=>'ClientsController@destroy']);

    Route::get('orders',['as'=>'orders.index', 'uses' => 'OrdersController@index']);
    Route::get('orders/edit/{id}',['as'=>'orders.edit', 'uses'=>'OrdersController@edit']);
    Route::post('/orders/update/{id}',['as'=>'orders.update', 'uses'=>'OrdersController@update']);

    Route::get('cupoms',['as'=>'cupoms.index', 'uses' => 'CupomsController@index']);
    Route::get('cupoms/create',['as'=>'cupoms.create', 'uses'=>'CupomsController@create']);
    Route::post('cupoms/store',['as'=>'cupoms.store', 'uses'=>'CupomsController@store']);
    Route::get('cupoms/edit/{id}',['as'=>'cupoms.edit', 'uses'=>'CupomsController@edit']);
    Route::post('/cupoms/update/{id}',['as'=>'cupoms.update', 'uses'=>'CupomsController@update']);
    Route::get('cupoms/destroy/{id}',['as'=>'cupoms.destroy', 'uses'=>'CupomsController@destroy']);
});

Route::group(['prefix'=>'customer', 'as'=>'customer.'], function(){

    Route::get('order', ['as'=>'order.index', 'uses'=>'CheckoutController@index']);
    Route::get('order/create', ['as'=>'order.create', 'uses'=>'CheckoutController@create']);
    Route::post('order/store', ['as'=>'order.store', 'uses'=>'CheckoutController@store']);
});
