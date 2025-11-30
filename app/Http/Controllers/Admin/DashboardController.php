<?php

// NAMESPACE HARUS MENGGUNAKAN "Admin"
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review; // Import Model Review

// NAMA CLASS HARUS SAMA DENGAN NAMA FILE
class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard admin dengan statistik ulasan.
     */
    public function index()
    {
        // 1. Hitung Total Ulasan
        $totalReviews = Review::count();

        // 2. Hitung Ulasan yang Sudah Disetujui
        $approvedReviews = Review::where('is_approved', true)->count();

        // 3. Kirim data statistik ke view 'admin.dashboard'
        // Catatan: View ini dipetakan ke resources/views/dashboard.blade.php
        return view('admin.dashboard', compact('totalReviews', 'approvedReviews'));
    }
}