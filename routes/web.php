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

Route::get('/', 'HomepageController@index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categorys', 'CategorysController');
Route::resource('products', 'ProductsController');
