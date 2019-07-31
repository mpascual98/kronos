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

Route::get('/', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/categories/{id}', 'CategoryController@show');
Route::get('/product/addtocart/{id}', 'CartController@store');

Route::get('/cart', 'CartController@show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/plantilla', function () {
    return view('plantilla');
});


Route::get('/products', "ProductController@directory"); // Le digo que vaya a buscar a ActorController directory
Route::get('/products/search', "ProductController@search"); // Le digo que vaya a buscar a ActorController directory
