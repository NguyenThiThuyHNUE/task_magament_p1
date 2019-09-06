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

use Illuminate\Support\Facades\Route;

    Route::get('index','CustomerController@index');
    Route::get('create','CustomerController@create');
    Route::get('store','CustomerController@store');
    Route::get('show','CustomerController@show');
    Route::get('edit','CustomerController@edit');
    Route::get('update','CustomerController@update');
    Route::get('delete','CustomerController@delete');
