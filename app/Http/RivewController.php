<?php

// PENTING: Pastikan namespace ini sesuai dengan jalur folder 'Admin'
namespace App\Http\Controllers\Admin; 

use App\Http\Controllers\Controller;
use App\Models\Review; 
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Tampilkan daftar semua ulasan.
     */
    public function index()
    {
        // Mengambil semua ulasan dan mengurutkannya dari yang terbaru
        $reviews = Review::latest()->get();
        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Tampilkan form untuk membuat ulasan baru.
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Simpan ulasan baru yang dibuat.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'guest_name' => 'required|string|max:100',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);
        
        // Atur is_approved berdasarkan checkbox atau default false
        $validatedData['is_approved'] = $request->has('is_approved'); 

        Review::create($validatedData);

        return redirect()->route('admin.reviews.index')->with('success', 'Ulasan baru berhasil ditambahkan dan disimpan!');
    }

    /**
     * Ubah status approval ulasan (custom method).
     */
    public function toggleApproval(Review $review)
    {
        $review->is_approved = !$review->is_approved;
        $review->save();

        $status = $review->is_approved ? 'Disetujui' : 'Ditolak';

        return redirect()->route('admin.reviews.index')
                         ->with('success', 'Status ulasan dari ' . $review->guest_name . ' berhasil diubah menjadi: ' . $status . '.');
    }

    /**
     * Hapus ulasan dari database.
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('admin.reviews.index')
                         ->with('success', 'Ulasan berhasil dihapus.');
    }
}