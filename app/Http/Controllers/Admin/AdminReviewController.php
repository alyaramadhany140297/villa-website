<?php

// PENTING: PASTIKAN NAMESPACE INI BENAR
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review; // Import Model Review
use Illuminate\Http\Request;

class AdminReviewController extends Controller
{
    /**
     * Menampilkan daftar semua ulasan.
     */
    public function index()
    {
        // Mengambil semua ulasan, diurutkan dari yang terbaru
        $reviews = Review::orderBy('created_at', 'desc')->get();
        // Mengirim data ke view 'admin.reviews.index'
        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Menampilkan form untuk membuat ulasan baru (untuk admin).
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Menyimpan ulasan baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi data masukan
        $validated = $request->validate([
            'guest_name' => 'required|string|max:100',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Membuat ulasan baru di database
        $review = Review::create([
            'guest_name' => $validated['guest_name'],
            'comment' => $validated['comment'],
            'rating' => $validated['rating'],
            // Mengambil status persetujuan dari form
            'is_approved' => $request->has('is_approved'), 
        ]);

        return redirect()->route('admin.reviews.index')->with('success', 'Ulasan berhasil ditambahkan dan disimpan!');
    }

    /**
     * Menghapus atau Mengubah Status (Setujui/Tolak) ulasan.
     * Fungsi ini menangani dua aksi berbeda: mengubah status (PUT) dan menghapus permanen (DELETE).
     */
    public function destroy(Request $request, Review $review)
    {
        // Cek apakah permintaan adalah untuk mengubah status (menggunakan method PUT/PATCH)
        if ($request->isMethod('PUT')) {
            $action = $request->input('action');

            if ($action === 'approve') {
                // Menyetujui ulasan (is_approved = true)
                $review->update(['is_approved' => true]);
                $message = 'Status ulasan dari ' . $review->guest_name . ' berhasil diubah menjadi: Disetujui.';
            } elseif ($action === 'decline') {
                // Menolak ulasan (is_approved = false)
                $review->update(['is_approved' => false]);
                $message = 'Status ulasan dari ' . $review->guest_name . ' berhasil diubah menjadi: Ditolak.';
            } else {
                return back()->with('error', 'Aksi tidak valid.');
            }
            
            return back()->with('success', $message);
        }

        // Jika permintaan adalah DELETE, hapus ulasan secara permanen
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Ulasan berhasil dihapus.');
    }
}