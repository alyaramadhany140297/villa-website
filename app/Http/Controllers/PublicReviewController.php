<?php

namespace App\Http\Controllers;
use App\Http\Controllers\PublicReviewController;

use App\Models\Review;

class PublicReviewController extends Controller
{
    public function index()
    {
        // Ambil hanya ulasan yang sudah disetujui admin
        $reviews = Review::where('status', 'approved')->latest()->get();

        return view('reviews', compact('reviews'));
    }
}
