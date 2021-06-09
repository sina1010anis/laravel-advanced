<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
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
Route::get('/Request' , [RequestController::class , 'index']);
Route::get('/Requests/{id?}' , [RequestController::class , 'index'])->where(['id' => '[0-9]+']);
Route::post('/request_check' , [RequestController::class , 'request_check'])->name('request_check');
