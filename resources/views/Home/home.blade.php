@extends('layout.app')

@section('content')


<div class="container-fluid bgimg">
    <div class="row text-center flex-row">
        <div class="col-12 col-md-12 col-xl-12">
            <div class="my-5">
                <img src="{{ asset('img/aom1.png') }}" alt="logo brand" class="anim img-fluid">
            </div>
            <div class="flicker-in-1">
                <h1>AOM Clothing</h1>
                <p>Made in Italy</p>
                <a href="{{ route('new') }}" class="btn btn-outline-light btn-lg mt-3">Get Started</a>
            </div>
        </div>
    </div>
</div>

@endsection

