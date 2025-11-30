@extends('layouts.app')

@section('title', 'Edit Ulasan')

@section('content')
    <div class="form-container">
        <h1>Edit Ulasan: {{ $review->guest_name }}</h1>
        
        <!-- PENTING: Form harus diarahkan ke route update dan menggunakan metode PUT/PATCH -->
        <form method="POST" action="{{ route('admin.reviews.update', $review->id) }}">
            @csrf
            <!-- Method spoofing untuk menggunakan PUT/PATCH karena HTML hanya mendukung GET dan POST -->
            @method('PUT') 
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="guest_name">Nama Pemberi Ulasan</label>
                <!-- Nilai form harus diisi dengan data yang sudah ada ($review->guest_name) -->
                <input type="text" id="guest_name" name="guest_name" value="{{ old('guest_name', $review->guest_name) }}" required>
            </div>

            <div class="form-group">
                <label for="comment">Isi Ulasan</label>
                <!-- Isi textarea juga diisi dengan data yang sudah ada ($review->comment) -->
                <textarea id="comment" name="comment" rows="4" required>{{ old('comment', $review->comment) }}</textarea>
            </div>

            <div class="form-group">
                <label for="rating">Rating (1-5)</label>
                <select id="rating" name="rating" required>
                    <!-- Menggunakan $review->rating untuk menentukan opsi yang dipilih (selected) -->
                    @for ($i = 5; $i >= 1; $i--)
                        <option value="{{ $i }}" {{ old('rating', $review->rating) == $i ? 'selected' : '' }}>{{ $i }} Bintang</option>
                    @endfor
                </select>
            </div>
            
            <div class="form-group form-check">
                <!-- Checkbox harus dicentang jika nilai is_approved di database adalah true -->
                <input type="checkbox" id="is_approved" name="is_approved" value="1" {{ old('is_approved', $review->is_approved) ? 'checked' : '' }}>
                <label for="is_approved">Setujui (Tampilkan di halaman depan)</label>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

    <style>
        /* Menggunakan style yang sama dengan form 'create' agar konsisten */
        .form-container { max-width: 600px; margin: 20px auto; background-color: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); }
        h1 { color: #007bff; border-bottom: 2px solid #007bff; padding-bottom: 10px; margin-bottom: 25px; text-align: center; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: bold; color: #333; }
        .form-group input[type="text"], .form-group textarea, .form-group select { 
            width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; 
            font-size: 1em; 
        }
        .form-group textarea { resize: vertical; }
        .form-actions { margin-top: 20px; display: flex; justify-content: space-between; }
        .btn { padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; text-decoration: none; font-weight: bold; }
        .btn-primary { background-color: #007bff; color: white; }
        .btn-secondary { background-color: #6c757d; color: white; }
        .btn-primary:hover { background-color: #0056b3; }
        .btn-secondary:hover { background-color: #5a6268; }
        .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
        .alert-danger { color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; }
        .form-check { display: flex; align-items: center; margin-top: 10px; }
        .form-check input { margin-right: 10px; }
    </style>
@endsection