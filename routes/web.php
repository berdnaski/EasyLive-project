<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Users\TrackingController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
    Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking-page');
    Route::post('/tracking', [TrackingController::class, 'tracking'])->name('tracking-page');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register-page');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login-page');
Route::post('/login', [LoginController::class, 'login'])->name('login');
