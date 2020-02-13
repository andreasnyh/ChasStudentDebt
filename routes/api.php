<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use App\Student;
use App\Drink;
use App\Http\Resources\Student as StudentResource;
use App\Http\Resources\Drink as DrinkResource;


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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */


Route::get('/students/{id}', function($id){
    
    return Student::find($id);
});

Route::get('/students', function(){

    $students = Student::paginate(5);
    return StudentResource::collection($students);
});

Route::get('drinks', function(){

    $drinks = Drink::paginate(10);
    return DrinkResource::collection($drinks);
});

Route::get('drinks/{id}', function($id){

});
