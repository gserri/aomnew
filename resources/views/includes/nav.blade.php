<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('img/aom1.png') }}" width="70" height="50" alt="logo image">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav abs-center-x">
            <li class="nav-item px-3">
                <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item px-3">
                    <a class="nav-link" href="{{ route('shop') }}">Shop</a>
            </li>
        </ul>
    </div>
</nav>
