<?php

namespace App\Http\Controllers;

use App\Models\Review; // Panggil Model Review
use Illuminate\Http\Request;

class ReviewPublicController extends Controller
{
    /**
     * Menampilkan semua ulasan yang sudah disetujui (is_approved = true).
     */
    public function index()
    {
        // Ambil semua ulasan, urutkan dari yang terbaru, dan HANYA yang sudah disetujui (1)
        $reviews = Review::where('is_approved', 1)
                         ->latest()
                         ->get();

        // Mengembalikan View Review (resources/views/review.blade.php)
        // Kita mengirim data $reviews ke view ini
        return view('review', compact('reviews'));
    }
}