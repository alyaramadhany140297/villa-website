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
Route::get('/review', [ReviewPublicController::class, 'index'])->name('review'); 

// RESERVASI
Route::get('/reservasi', function () {
    return view('reservasi'); 
})->name('reservasi'); 

// BLOG
Route::get('/our-blog', function () {
    return view('our_blog'); 
})->name('our_blog'); 

// 1. Rute untuk Menampilkan Halaman Login (Memberi nama 'login')
Route::get('/login', function () {
    return view('auth.login'); 
})->name('login'); 

// 2. Rute Logout
Route::post('/logout', function () {
    if (auth()->check()) {
        auth()->logout(); 
    }
    return redirect('/');
})->name('logout');
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
Route::get('/our_blog', function () {
    return view('our_blog'); // resources/views/our_blog.blade.php
})->name('our_blog');


Route::get('/kebijakan_privasi', function () {
    return view('kebijakan_privasi');
});

Route::get('/persyaratan_pengguna', function () {
    return view('persyaratan_pengguna');
});

