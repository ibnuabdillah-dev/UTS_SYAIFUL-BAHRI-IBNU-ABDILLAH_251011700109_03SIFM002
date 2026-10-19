@php
    $menu = [
        ['Home', 'home', 'home'],
        ['About', 'about', 'about'],
        ['Catalog', 'produk.index', 'produk.*'],
        ['Contact Us', 'contact', 'contact'],
    ];
@endphp
<nav class="navbar navbar-expand-lg krz-nav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Krezzo" height="44">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Buka menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto gap-lg-4">
                @foreach ($menu as [$label, $route, $pattern])
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs($pattern) ? 'active' : '' }}"
                           href="{{ route($route) }}">{{ $label }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
