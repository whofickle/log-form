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

Route::get('/', function () {
    return view('index');
});

Route::get('/manual', function () {
    return view('form');
});

Route::get('/register', function () {
    return view('registerUser');
});
Route::get('/users', [UserController::class, 'getUsers']);
Route::get('/users/{id}', [UserController::class, 'getUserFiles']);

Route::post('/upload', [LogController::class, 'storeLog']);

Route::get('/logs', [LogController::class, 'getLogs']);
Route::get('/logs/{id}', [LogController::class, 'getLog']);
