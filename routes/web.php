<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hui', function () {
    return view('forms');
});



Route::post("/users", [App\Http\Controllers\Controller::class,'userFormAction' ]);
Route::post("/authors", [App\Http\Controllers\Controller::class,'authorsFormAction' ]);
Route::post("/play", [App\Http\Controllers\Controller::class,'playerAction' ]);




