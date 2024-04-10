<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman utama atau beranda
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk CRUD Berita
Route::resource('beritas', BeritaController::class);

// Rute untuk autentikasi
Auth::routes();

// Rute untuk lupa kata sandi
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
