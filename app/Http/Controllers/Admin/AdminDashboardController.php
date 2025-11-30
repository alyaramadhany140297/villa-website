<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review; // Import model Review
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    /**
     * Menampilkan dashboard admin beserta statistik ulasan.
     */
    public function index()
    {
        // Menghitung Total Ulasan
        $totalReviews = Review::count();
        
        // Menghitung Ulasan yang Disetujui (is_approved = true)
        $approvedReviews = Review::where('is_approved', true)->count();

        // Mengirim data ke view
        // Pastikan view ada di resources/views/admin/dashboard.blade.php
        return view('admin.dashboard', compact('totalReviews', 'approvedReviews'));
    }
}