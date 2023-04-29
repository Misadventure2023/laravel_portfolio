<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/login',[UserController::class, 'index']);
Route::get('/admin',[UserController::class,'dashBoard']);
Route::get('admin/order',[OrderController::class,'index']);