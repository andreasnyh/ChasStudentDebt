<?php

use App\Order;
use App\Student;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students', function() {
    return Student::all();
});

Route::get('students/{id}', function($id) {
    return Student::find($id);
});

Route::get('orders', function() {
    return Order::all();
});

Route::get('orders/{id}', function($id) {
    return Order::find($id);
});
