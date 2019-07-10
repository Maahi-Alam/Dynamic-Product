<?php

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
    return view('admin.index');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//product routing...........................................................

route::get('/product', ['as'=>'prod.index','uses'=>'ProductController@index']);
route::get('/product/create',['as'=>'prod.create','uses'=>'ProductController@create']);
route::post('/product/store', ['as'=>'prod.store','uses'=>'ProductController@store']);


//category routing...........................................................

route::get('/category', ['as'=>'cat.index','uses'=>'CategoryController@index']);
route::get('/category/create',['as'=>'cat.create','uses'=>'CategoryController@create']);
route::post('/category/store', ['as'=>'cat.store','uses'=>'CategoryController@store']);

//category option routing...........................................................

route::get('/cat-option', ['as'=>'cat-op.index','uses'=>'CategoryOptionController@index']);
route::get('/cat-option/create',['as'=>'cat-op.create','uses'=>'CategoryOptionController@create']);
route::post('/cat-option/store', ['as'=>'cat-op.store','uses'=>'CategoryOptionController@store']);


//sku/setting pricing routing...........................................................

route::get('/sku', ['as'=>'sku.index','uses'=>'SkuController@index']);
route::get('/sku/create',['as'=>'sku.create','uses'=>'SkuController@create']);
route::post('/sku/store', ['as'=>'sku.store','uses'=>'SkuController@store']);

//sku-values overall routing...........................................................

route::get('/sku-value', ['as'=>'sku-value.index','uses'=>'SkuValueController@index']);
route::get('/sku-value/create',['as'=>'sku-value.create','uses'=>'SkuValueController@create']);
route::post('/sku-value/store', ['as'=>'sku-value.store','uses'=>'SkuValueController@store']);
