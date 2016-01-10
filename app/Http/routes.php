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

Route::get('product/add','ProductController@index');
Route::get('product/list',['uses'=>'ProductController@lists','as'=>'productList']);
Route::get('product/{id}/edit',['uses'=>'ProductController@edit','as'=>'editProduct']);
Route::get('product/{id}/delete',['uses'=>'ProductController@destroy','as'=>'deleteProduct']);
Route::get('product/cart',['uses'=>'ProductController@cart','as'=>'addToCart']);


Route::post('product',['uses'=>'ProductController@create','as'=>'postAddProduct']);
Route::post('product/{id}/save',['uses'=>'ProductController@update','as'=>'saveEditedProduct']);

