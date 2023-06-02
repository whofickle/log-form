<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;

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

Route::get('/manual', function () {
    return view('form');
});

Route::get('/register', function () {
    return view('registerUser');
});

Route::get('/user/{id}', [UserController::class, 'userView']);

Route::post('/', [LogController::class, 'store']);

Route::get('/log/{id}', [LogController::class, 'read']);
