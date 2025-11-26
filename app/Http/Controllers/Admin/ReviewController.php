<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review; // Menggunakan Model Review yang sudah kita buat
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ReviewController extends Controller
{
    /**
     * Menampilkan daftar semua ulasan (termasuk yang belum disetujui).
     */
    public function index()
    {
        // Ambil semua ulasan, diurutkan dari yang terbaru (paling butuh moderasi)
        $reviews = Review::latest()->get();

        // View ini akan memanggil file resources/views/admin/reviews/index.blade.php
        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Mengupdate status persetujuan ulasan (Approve/Reject).
     */
    public function update(Request $request, Review $review)
    {
        // 1. Validasi input
        $request->validate([
            'is_approved' => 'required|boolean', // Memastikan nilainya 1 (true) atau 0 (false)
        ]);
        
        // 2. Update status
        $review->update([
            'is_approved' => $request->is_approved,
        ]);

        // 3. Redirect kembali ke halaman index
        return redirect()->route('admin.reviews.index')
                         ->with('success', 'Status Ulasan berhasil diperbarui!');
    }

    /**
     * Menghapus ulasan (jika dianggap spam atau tidak pantas).
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('admin.reviews.index')
                         ->with('success', 'Ulasan berhasil dihapus.');
    }
}