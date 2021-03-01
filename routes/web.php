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

Route::get('/Sign-up', function () {
    return view('Sign-up');
});

Route::get('/Sign-in', function () {
    return view('Sign-in');
});


Route::get('/intro', function () {
    return view('index');
});

Route::get('/Test', function () {
    return view('test');
});

Route::get('/MajorElective', function () {
    return view('Major Elective');
});
Route::get('/ArtiIntel', function () {
    return view('ArtiIntel');
});

Route::get('/comArch', function () {
    return view('comArch');
});
Route::get('/netSecurity', function () {
    return view('netSecurity');
});
Route::get('/data', function () {
    return view('data');
});
Route::get('/ComGraph', function () {
    return view('ComGraph');
});

Route::get('/softEn', function () {
    return view('softEn');
});

Route::get('/ScienComp', function () {
    return view('ScienComp');
});
Route::get('/parallel', function () {
    return view('parallel');
});


Route::get('/result', function () {
    return view('result');
});

// Route::get('/result', 'App\Http\Controllers\mainController@test');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
