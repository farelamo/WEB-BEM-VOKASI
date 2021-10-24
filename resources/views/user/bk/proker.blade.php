@extends('user.layout.main')

@push('styles')
    <style>
        .tengah {
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
            <div class="caption">
                <h1 class="text-white">{{ $proker }}</h1>
                <div class="position-relative">
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="bg-primary-2 rounded-lg shadow py-3">
                                <img src="{{ $imgProkers[0] }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-primary-2 rounded-lg shadow py-3">
                                <img src="{{ $imgProkers[1] }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tengah position-absolute bg-primary-2 rounded-lg shadow p-5">
                        <img src="{{ $imgProkers[1] }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.partials.footer')
@endsection