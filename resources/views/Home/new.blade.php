@extends('layout.app')

@section('title', 'AoM - What s  New')

@section('content')

<div class="container-fluid px-0">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            @include('includes.nav')
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <header>
                <div class="overlay"></div>
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
                    </video>
                    <div class="container h-100">
                        <div class="d-flex h-100 text-center align-items-center">
                            <div class="w-100 text-white">
                                <h1 class="display-3">AoM 2k19</h1>
                                <p class="lead mb-0">New Collection Spring/Summer</p>
                                <a href="{{ route('shop') }}" class="btn btn-outline-light btn-lg mt-5">Shop Now</a>
                            </div>
                        </div>
                    </div>
            </header>
        </div>
    </div>
</div>
@endsection