<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\InfoLegal\InfoLegalController;
use App\Http\Controllers\MainController;
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
//Получаем юридическую информацию для организаций
Route::get('/get-info-legal', [InfoLegalController::class, 'getinfolegal']);

Route::get('/index', [InfoLegalController::class, 'index']);
Route::get('/pay-show', [InfoLegalController::class, 'payshow']);



Route::get('/tinkoff', [InfoLegalController::class, 'tinkoff']);
