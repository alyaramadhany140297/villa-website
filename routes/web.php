<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicReviewController;

// Admin Controllers
use App\Http\Controllers\Admin\AdminReviewController;
use App\Http\Controllers\Admin\DashboardController;


// ===============================================================
// 1. PUBLIC ROUTES (HALAMAN FRONTEND)
// ===============================================================

// Halaman utama FRONTEND
Route::get('/', function () {
    return view('home');   // Frontend kamu di home.blade.php
});

// Halaman untuk menampilkan review yang disetujui
Route::get('/reviews', [PublicReviewController::class, 'index'])->name('reviews.public');


// ===============================================================
// 2. AUTHENTICATION ROUTES (LOGIN & LOGOUT)
// ===============================================================

// Menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [AuthController::class, 'login']);

// Proses logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// ===============================================================
// 3. ADMIN ROUTES (HANYA BISA DIAKSES SETELAH LOGIN)
// ===============================================================

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // PENGELOLAAN ULASAN DI ADMIN
    Route::get('/reviews', [AdminReviewController::class, 'index'])->name('reviews.index');
    Route::get('/reviews/create', [AdminReviewController::class, 'create'])->name('reviews.create');
    Route::post('/reviews', [AdminReviewController::class, 'store'])->name('reviews.store');

    // Approve / Decline / Delete review
    Route::match(['put', 'delete'], '/reviews/{review}', [AdminReviewController::class, 'destroy'])
         ->name('reviews.destroy');
});
