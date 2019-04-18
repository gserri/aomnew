@extends('layout.app')

@section('title', 'AoM - What s  New')

@section('content')

@include('includes.nav')


<header>
    <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
        </video>
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
                <h1 class="display-3">AOM 2k19</h1>
                <p class="lead mb-0">Spring / Summer</p>
                <a href="{{ route('shop') }}" class="btn btn-outline-light btn-lg mt-5">Shop Now</a>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <h1 class="text-center mt-3">Mesonry Image gallery</h1>
    <div class="row">
        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
            <div class="row h-50">
                <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <img src="{{ asset('img/court.png') }}" class="img-ht img-fluid rounded">
                    </div>
                </div>
            </div>
            
            <div class="row h-50">
                <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <img src="{{ asset('img/court.png') }}" class="img-ht img-fluid rounded">
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <img src="{{ asset('img/court.png') }}" class="img-ht img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
            <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-25">
                <div class="box">
                    <img src="{{ asset('img/court.png') }}" class="img-ht img-fluid rounded">
                </div>
            </div>
            
            <div class="col-md-12 col-sm-6 co-xs-12 gal-item h-75">
                <div class="box">
                    <img src="{{ asset('img/court.png') }}" class="img-ht img-fluid rounded">
                </div>
            </div>
        </div>
        
    </div>
    <br/>
</div>


@endsection