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
    return view('welcome');
});


Route::get('/show_drinks', 'DrinkController@index');

// New order form
Route::get('/order', function () {
    return view('order');
});

// Create a new order
Route::get('/order/new', 'OrderController@store');

// Info about a specific order
Route::get('/order/{orderID}', 'OrderController@show');

// Shown after an order has been made
Route::get('/order/made/{orderID}', 'OrderController@orderMade');

Route::get('/history', 'HistoryController@index');

Route::get('/history/{id}', 'HistoryController@show');



