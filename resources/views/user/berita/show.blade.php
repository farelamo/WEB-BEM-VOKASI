@extends('user.layout.main')

@push('styles')
    <style>
        body {
            background-color: #f1eee5;
        }
    </style>
@endpush

@section('content')
    @include('user.partials.header')

    <div class="main-banner">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('images/motion.mp4')}}" type="video/mp4" />
        </video>
        <div class="video-overlay header-text">
            <div class="caption w-100">
                <img src="{{ asset('/images/barita/' . $berita['gambar']) }}" alt="{{ $berita['gambar'] }}">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="my-5 py-5">
            <div class="h1 text-center mb-0">{{ $berita['judul'] }}</div>
            <p class="font-weight-bold text-center mb-4">{{ $berita['tempat'] . ', ' . $berita['waktu'] }}</p>
            <p class="text-start">{{ $berita['deskripsi'] }}</p>
        </div>
    </div>

    @include('user.partials.footer')
@endsection