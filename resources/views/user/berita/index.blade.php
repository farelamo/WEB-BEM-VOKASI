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
                <h1 class="text-white">BERITA</h1>
            </div>
        </div>
    </div>
    <div id="berita" class="container">
        <div class="my-5 py-5">
            @foreach ($berita as $b)
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('/images/berita/' . $b['gambar']) }}" alt="{{ $b['gambar'] }}">
                    </div>
                    <div class="col-md-auto py-4">
                        <div class="h5 mb-0">{{ $b['judul'] }}</div>
                        <p class="font-weight-bold mb-3">{{ $b['tempat'] . ', ' . $b['waktu'] }}</p>
                        @if (Str::length($b['deskripsi']) > 120)
                            <p>{{ Str::limit($b['deskripsi'], 120) }}</p>
                        @else
                            <p>{{ $b['deskripsi'] }}</p>
                        @endif
                        <div class="main-button scroll-to-section">
                            <a href="{{ url()->current() . '/' . $b['id'] }}" class="bg-button-1 rounded-pill">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-4">
                {{ $berita->links() }}
            </div>
        </div>
    </div>

    @include('user.partials.footer')
@endsection