@extends('user.layout.main')

@push('styles')
    <style>
        body {
            background-color: #f1eee5;
        }
        .kepengurusan {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
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
                <h1 class="text-white">{{ ($biro ? 'BIRO ' : 'KEMENTERIAN ') . Str::upper($nama) }}</h1>
                <div class="row align-items-center">
                    <div class="col-md-6 pl-0 text-left">
                        <img src="{{ $logo }}" alt="logo" class="img-fluid w-100">
                    </div>
                    <div class="col-md-6 pl-0 pr-5 text-left">
                        <p>{{ $desc }}</p>
                        <div class="main-button scroll-to-section">
                            <a href="#" class="rounded-pill">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="kepengurusan" class="text-center my-5 py-5">
        <div class="position-relative">
            <img src="{{ asset('/images/wave.png') }}">
            <div class="position-absolute kepengurusan w-100">
                <h2 class="text-primary-2">STRUKTUR KEPENGURUSAN</h2>
                <img src="{{ $imgKepengurusan }}" class="rounded-lg shadow mb-3">
                <div class="main-button scroll-to-section">
                    <a href="{{ url()->current() . '/kepengurusan' }}" class="bg-button-2 text-dark rounded-pill">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <div id="proker" class="d-flex justify-content-center">
        <div class="text-center bg-secondary-2 rounded-lg shadow p-5">
            <h2 class="text-primary-2">PROKER</h2>
            <img src="{{ $imgProker }}" class="rounded-lg mb-3">
            <div class="main-button scroll-to-section">
                <a href="{{ url()->current() . '/proker' }}" class="rounded-pill">Selengkapnya</a>
            </div>
        </div>
    </div>
    @include('user.partials.footer')
@endsection