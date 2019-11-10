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
Auth::routes();

Route::middleware('locale')->prefix('user')->group(function (){
    Route::get('home','UserController@home')->name('user.home');
    Route::get('index','UserController@index')->name('user.index');
    Route::get('create','UserController@create')->name('user.create');
    Route::post('create','UserController@store')->name('user.store');
    Route::get('show/{id}','UserController@show')->name('user.show');
    Route::get('edit/{id}','UserController@edit')->name('user.edit');
    Route::patch('edit/{id}','UserController@update')->name('user.update');
    Route::get('{id}','UserController@delete')->name('user.delete');
    Route::delete('{id}','UserController@delete')->name('user.delete');
});

Route::middleware('locale')->get('menu', 'menuController@index')->name('menu.index');

Route::middleware('locale')->resource('products','ProductController');
Route::get('search','HomeController@search')->name('product.search');
Route::get('searchbycity','HomeController@search_city')->name('product.search_city');
Route::get('searchbyspecies','HomeController@search_species')->name('product.search_species');




Route::middleware('locale')->get('profile','ProfileController@show')->name('profile.show');
Route::middleware('locale')->post('profile','ProfileController@show')->name('profile.show');

Route::middleware('locale')->get('bills','BillController@index')->name('bill.index');
Route::middleware('locale')->get('bills/show{id}','BillController@show')->name('bill.show');



Route::middleware('locale')->get('/huongque','HomeController@show')->name('display.show');
Route::middleware('locale')->get('huongque/{id}','HomeController@show_id')->name('display.show_id');
Route::middleware('locale')->get('huongqueCity','HomeController@listCity')->name('info.city');


Route::middleware('locale')->get('/cart','ShoppingCartController@index')->name('cart.index');
Route::middleware('locale')->get('/add-to-cart/{id}','ShoppingCartController@addToCart')->name('cart.addToCart');
Route::middleware('locale')->get('/remove-to-cart/{id}','ShoppingCartController@removeProductIntoCart')->name('cart.removeProductIntoCart');
Route::middleware('locale')->get('/update-to-cart/{id}','ShoppingCartController@updateProductIntoCart')->name('cart.updateProductIntoCart');


Route::middleware('locale')->get('order','OrderController@create')->name('order.create');
Route::middleware('locale')->post('order','OrderController@store')->name('order.store');

Route::middleware('locale')->resource('feedbacks','FeedbackController');

Route::post('change-lang/{lang}','LangController@ChangeLanguage')->name('change.language');


Route::get('listCity','CityController@getAll')->name('city.list');
Route::get('showCity/{id}','CityController@show')->name('city.show');
Route::get('createCity','CityController@create')->name('city.create');
Route::post('createCity','CityController@store')->name('city.store');
Route::get('editCity/{id}','CityController@edit')->name('city.edit');
Route::patch('editCity/{id}','CityController@update')->name('city.update');
Route::get('{id}','CityController@delete')->name('city.delete');
Route::delete('{id}','CityController@delete')->name('city.delete');


Route::get('city','LayoutController@listCity')->name('layout');

Route::get('auth/facebook', 'FacebookAuthController@redirectToProvider')->name('facebook.login') ;
Route::get('auth/facebook/callback', 'FacebookAuthController@handleProviderCallback');

//Route::get('showCity','HomeController@showcity')->name('');
