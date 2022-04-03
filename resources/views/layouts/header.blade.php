<!-- ======= Header ======= -->
<?php

use Illuminate\Support\Facades\Auth;
?>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/home" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/Capture-removebg-preview.png') }}" alt="">
            <span>PeduliDiri</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                @guest
                    <?php if (!Auth::user()) : ?>
                    @if (Route::getCurrentRoute()->uri() == 'login' || Route::getCurrentRoute()->uri() == 'register')
                        <li class="nav-item mr-4">
                            <a class="nav-link active" aria-current="page" href="/" style="font-size: 16px">Home</a>
                        </li>
                    @endif
                    @if (Route::getCurrentRoute()->uri() == 'login')
                        <li class="nav-item">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}">Log in</a>
                        </li>
                    @endif
                    <?php endif; ?>
                @else
                    <li><a class="nav-link {{ set_active('home') }}  scrollto " href="/home">Home</a></li>
                    @if (Auth::user()->level == 'admin')
                        <li><a class="nav-link {{ set_active('admin') }}  scrollto " href="/admin">Admin</a></li>
                    @endif
                    @if (Auth::user()->level == 'user')
                        <li><a class="nav-link {{ set_active('index') }} scrollto" href="/index">Perjalanan</a></li>
                    @endif
                    <li class="dropdown">
                        <a href="#">
                            <!-- <span>{{ Auth::user()->name }}</span> -->
                            <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" style="width:40px"
                                class="img-fluid" alt="">
                            <!-- <i class="bi bi-chevron-down"></i> -->
                        </a>
                        <ul>
                            <li><a href="/profile">Profil</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->
