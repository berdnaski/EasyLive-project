<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Users\TrackingController;
use App\Http\Controllers\Users\TicketGateController;
use App\Http\Controllers\Users\LiveController;

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

Route::get('/register', [RegisterController::class, 'index'])->name('register-page');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login-page');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::middleware(['auth'])->group(function () {

    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

    Route::get('/tracking', [TrackingController::class, 'index'])->name('tracking-page');
    Route::post('/tracking', [TrackingController::class, 'tracking'])->name('tracking-page');

    Route::get('/form', [TicketGateController::class, 'index'])->name('ticket_gate-page');
    Route::post('/form', [TicketGateController::class, 'store'])->name('ticket_gate-store');

    Route::prefix('lives')->group(function () {
        Route::get('/', [LiveController::class, 'index'])->name('live-index');
        Route::get('/create', [LiveController::class, 'create'])->name('live-create');
        Route::post('/store', [LiveController::class, 'store'])->name('live-store');
        Route::get('/{id}', [LiveController::class, 'show'])->name('live-show');
        Route::delete('/{id}', [LiveController::class, 'destroy'])->name('live-destroy');
    });
});
