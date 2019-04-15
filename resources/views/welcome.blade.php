<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


</head>
<body class="container black">
    <div class="row">
        <div class="col-12">
            <ul class="nav justify-content-end p-4 sticky-top">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row black">
        <div class="col-12">
            <div class="text-center">
                <img src="{{ asset('img/aom.png') }}" alt="logo brand" class="anim img-fluid">
            </div>
        </div>
    </div>

    <div id="jumbo" class="row">
        <div class="col-12">
            <h1 class="text-center">New Product</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In minima dolorum rem dolorem deserunt, soluta veniam eum quasi laudantium? Nesciunt, veritatis facere iure adipisci assumenda voluptas officia laboriosam quod ex.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Brand</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum similique eligendi odit quisquam? Ipsum distinctio nesciunt quam, accusamus eum tempore blanditiis delectus omnis quo quas sit natus in aperiam sequi?</p>
        </div>
        <div class="col-6">
            <img src="{{ asset('img/basket.jpg') }}" alt="logo basket" class="img-fluid">
        </div>
    </div>
</body>
</html>
