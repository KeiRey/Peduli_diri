<!-- ======= Header ======= -->
<?php

use Illuminate\Support\Facades\Auth;
?>

<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/home" class="logo d-flex align-items-center">
            <img src="{{asset('assets/img/Capture-removebg-preview.png')}}" alt="">
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
                <li><a class="nav-link {{ set_active('index') }} scrollto" href="/index">Perjalanan</a></li>
                <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/profile">Profil</a></li>
                        <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li> -->
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