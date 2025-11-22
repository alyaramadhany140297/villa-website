<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
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

