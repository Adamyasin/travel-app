<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\JadwalTravelController;
use App\Http\Controllers\Admin\LaporanController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/jadwal', [JadwalTravelController::class, 'index'])->name('dashboard.jadwal.index');
    Route::post('/dashboard/jadwal', [JadwalTravelController::class, 'store'])->name('dashboard.jadwal.store');
    Route::delete('/dashboard/jadwal/{id}', [JadwalTravelController::class, 'destroy'])->name('dashboard.jadwal.destroy');
    Route::get('/dashboard/jadwal/{id}/penumpang', [JadwalTravelController::class, 'getPenumpang'])->name('dashboard.jadwal.penumpang');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/laporan', [LaporanController::class, 'index'])->name('dashboard.laporan.index');
});
