@extends('layouts.app') {{-- kalau kamu pakai layout --}}

@section('content')
<div class="container mt-5">

    <h2 class="mb-4 text-center">Ulasan Pengunjung</h2>

    @if($reviews->count() > 0)
        <div class="row">
            @foreach($reviews as $review)
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm p-3">
                    <h5>{{ $review->nama }}</h5>
                    <small>{{ $review->created_at->format('d M Y') }}</small>
                    <p class="mt-2">{{ $review->ulasan }}</p>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <p class="text-center">Belum ada ulasan.</p>
    @endif

</div>
@endsection
