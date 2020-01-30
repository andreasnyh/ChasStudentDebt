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
//filter/search option for student
Route::get('/students', 'StudentController@index');
//list students for selected class
Route::get('/students/{education}', 'StudentController@indexClass($education)');
// search for student by string
Route::get('/students/{name}', 'StudentController@show($name)');
//add new student
Route::get('/students/add', 'StudentController@create');
/*
//list search
Route::get('/student/list', 'StudentController@list');
//show student
Route::get('/student/list/{id}', 'StudentController@show');
*/

Route::get('/show_drinks', 'DrinkController@index');

Route::get('/order', function () {
    return view('order');
});

Route::get('/order/{orderID}', 'OrderController@show');

Route::get('/history', 'HistoryController@index');

Route::get('/history/{id}', 'HistoryController@show');



