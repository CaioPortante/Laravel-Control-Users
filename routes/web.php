<?php

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

/* Route::post('login-form')->name('login-form'); */

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/register/create', [UserController::class, 'register'])->name('register.create');
Route::get('/users', [UserController::class, 'get'])->name('users');
