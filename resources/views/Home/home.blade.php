@extends('layout.app')

@section('content')


<div class="container">
    <div class="row text-center flex-row">
        <div class="col-12 col-md-12 col-xl-12">
            <div class="my-5">
                <img src="{{ asset('img/aom1.png') }}" alt="logo brand" class="anim img-fluid">
            </div>
            <div id="mark" class="blink-1 mt-5">
                <h1>AoM Clothing</h1>
                <p>Made in Italy</p>
                <a href="{{ route('new') }}" class="btn btn-outline-light btn-lg mt-3">Get Started</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('myjs')
<script>
$(document).ready(function() {
    $('#mark').delay(2000).fadeIn(400);
});
</script>
@endsection