@extends('user.layout.main')

@section('content')
    @include('user.partials.header')

    <div class="main-banner">
        <video autoplay muted loop id="bg-video">
            <source src="{{asset('images/motion.mp4')}}" type="video/mp4" />
        </video>
        <div class="video-overlay header-text">
            <div class="caption bg-secondary-2 rounded-lg shadow p-5">
                <h1>STAFF AHLI {{ Str::upper($nama) }}</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="bg-secondary-3 rounded-lg shadow p-2">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="text-primary-2 my-3">{{ $names[$i] }}</div>
                            @endfor
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-secondary-3 rounded-lg shadow p-2">
                            @for ($i = 5; $i < 10; $i++)
                                <div class="text-primary-2 my-3">{{ $names[$i] }}</div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.partials.footer')
@endsection