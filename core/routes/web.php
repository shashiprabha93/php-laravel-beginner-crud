<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('products','ProductController');
Route::get('/products', 'ProductController@index')->name('index');

Route::resource('members','MemberController');
Route::get('/members', 'MemberController@create')->name('index1');

//Route::get('/products/add', 'ProductController@create');
//Route::post('/products/add', array('uses' => 'ProductController@store', 'as' => 'products.create'));
//Route::post('/products/add', 'ProductController@store');

//Route::get('/products/create', 'ProductController@create');
//Route::post('/products/create', 'ProductController@createProduct');


