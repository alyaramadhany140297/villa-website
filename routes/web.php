<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ReviewController; 
use App\Http\Controllers\ReviewPublicController; 

// --- Rute Halaman Publik (DI LUAR AUTH) ---

// HOME
Route::get('/', function () {
    return view('home'); 
});

// ABOUT
Route::get('/about', function () {
    return view('about'); 
})->name('about'); 

// FACILITY
Route::get('/facility', function () {
    return view('facility'); 
})->name('facility'); 

// REVIEW
// Ganti rute lama dengan Controller baru agar data bisa diambil dari database.
Route::get('/review', [ReviewPublicController::class, 'index'])->name('review'); 

// RESERVASI
Route::get('/reservasi', function () {
    return view('reservasi'); 
})->name('reservasi'); 

// BLOG
Route::get('/our-blog', function () {
    return view('our_blog'); 
})->name('our_blog'); 

// --- RUTE OTENTIKASI (SOLUSI UNTUK ERROR 'Route [login] not defined') ---

// 1. Rute untuk Menampilkan Halaman Login. 
// Ini memberi nama 'login' agar middleware 'auth' tidak error saat redirect.
Route::get('/login', function () {
    // Kita asumsikan Anda akan membuat resources/views/auth/login.blade.php
    return view('auth.login'); 
})->name('login'); 

// 2. Rute Logout
// Anda harus menambahkan Controller autentikasi yang benar di sini agar logout berfungsi.
// Untuk saat ini, kita gunakan fungsi dasar PHP untuk logout.
Route::post('/logout', function () {
    // Memastikan logout hanya bisa diakses setelah login
    if (auth()->check()) {
        auth()->logout(); 
    }
    return redirect('/');
})->name('logout');


// --- Rute Admin (Di dalam middleware auth) ---
Route::middleware(['auth'])->group(function () {
    // ... rute admin lainnya ...
    Route::resource('admin/reviews', ReviewController::class)
        ->names('admin.reviews'); 
    
    // Rute Dashboard Admin yang biasanya ada
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});