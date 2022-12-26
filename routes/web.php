<?php

use App\Http\Controllers\FormController;
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

Route::get('survey', function () {
    Route::redirect('survey.1');
});

Route::prefix('survey')->group(function () {
    Route::view('/1', 'user.survey1')->name('survey.1');
    Route::view('/2', 'user.survey2')->name('survey.2');
    Route::view('/3', 'user.survey3')->name('survey.3');
    Route::view('/4', 'user.survey4');
});

Route::post('submit', [FormController::class, 'submit'])->name('submit');
