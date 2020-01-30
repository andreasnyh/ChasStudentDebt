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
<<<<<<< HEAD

=======
//search option for student
Route::get('/students', 'StudentController@index');
/*
//list search
Route::get('/student/list', 'StudentController@list');
//show student
Route::get('/student/list/{id}', 'StudentController@show');
*/
>>>>>>> master

Route::get('/drinks', 'DrinkController@index');

Route::get('/order', function () {
    return view('order');
});

Route::get('/order/{orderID}', 'OrderController@show');

Route::get('/history', 'HistoryController@index');

Route::post('/history', 'HistoryController@store');

Route::get('/history/{student_id}', 'HistoryController@show');



