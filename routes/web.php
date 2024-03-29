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

Route::get('/', 'ChartController@index');

Route::get('charts', 'ChartController@index');

Route::get('types', 'TypeController@index');



Route::get('categories', 'CategoryController@index');

Route::get('categories/new', 'CategoryController@create');
