<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SurveyController;
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
})->name('index');

Route::prefix('survey')->group(function () {
    Route::get('/', function () {
        return redirect()->route('survey.step.one');
    });

    Route::get('/step-one', [SurveyController::class, 'createSurveyStepOne'])->name('survey.step.one');
    Route::post('/step-one', [SurveyController::class, 'storeSurveyStepOne'])->name('survey.store.step.one');

    Route::get('/step-two', [SurveyController::class, 'createSurveyStepTwo'])->name('survey.step.two');
    Route::post('/step-two', [SurveyController::class, 'storeSurveyStepTwo'])->name('survey.store.step.two');

    Route::get('/step-three', [SurveyController::class, 'createSurveyStepThree'])->name('survey.step.three');
    Route::post('/step-three', [SurveyController::class, 'storeSurveyStepThree'])->name('survey.store.step.three');

    Route::get('/step-four', [SurveyController::class, 'createSurveyStepFour'])->name('survey.step.four');
    Route::post('/step-four', [SurveyController::class, 'storeSurveyStepFour'])->name('survey.store.step.four');
});

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('post.login');

Route::middleware(['auth'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/user-list', [DashboardController::class, 'userList'])->name('dashboard.user.list');
        Route::get('/survey-list', [DashboardController::class, 'surveyList'])->name('dashboard.survey.list');
    });

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::post('/survey-list/{survey}', [SurveyController::class, 'destroy'])->name('survey.destroy');

    Route::get('excel', [SurveyController::class, 'exportExcel'])->name('to-excel');
});
