<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\LogoutUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginUserController::class, 'login_page'])->middleware('loggedIn')->name('login');
Route::get('/register', [RegisterUserController::class, 'register_page'])->name('register');

Route::post('/login', [LoginUserController::class, 'login_user'])->name('login-user');
Route::post('/register', [RegisterUserController::class, 'register_user'])->name('register-user');

Route::post('/logout', [LogoutUserController::class, 'logout'])->middleware('authVerify')->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('authVerify')->name('dashboard');
