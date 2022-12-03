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
    return view('user.index');
});

Route::prefix('survey')->group(function () {
    Route::view('/', 'user.survey1');
    Route::view('/2', 'user.survey2');
    Route::view('/3', 'user.survey3');
    Route::view('/4', 'user.survey4');
});
