@extends('layout.app')

@section('content')



<div class="row text-center flex-row">
    <div class="col-12 col-md-12 col-xl-12">
        <div class="my-5">
            <img src="{{ asset('img/aom.png') }}" alt="logo brand" class="anim img-fluid">
        </div>
        <div id="mark" class="blink-1">
            <h1>AoM Clothing</h1>
            <p>Made in Italy</p>
            <button class="myButton">Get Started</button>
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