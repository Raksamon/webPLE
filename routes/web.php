<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Home', function () {
    return view('index');
});

Route::get('/Test', function () {
    return view('test');
});
Route::get('/confirm','App\Http\Controllers\mainController@test');

Route::get('/MajorElective', function () {
    return view('MajorElective');
});
Route::get('MajorElective/confirm','App\Http\Controllers\mainController@majorElective');

Route::get('/result', function () {
    return view('result');
});


// Route::get('/result', 'App\Http\Controllers\mainController@test');
Auth::routes();
Route::post('/userCheck','App\Http\Controllers\registerController@userReg');

Route::get('/', function () {
    return view('auth/login');
});