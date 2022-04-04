@extends('layouts.app', ['title' => 'Dashboard'])
@section('content')

<div class="col-lg-6 d-flex flex-column justify-content-center">
    <h1 data-aos="fade-up">Solusi mudah mencatat data perjalanan anda</h1>
    <h2 data-aos="fade-up" data-aos-delay="400">Mudah, praktis, terjangkau, dan aman</h2>
    <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
            <a href="/index" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Mulai</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
<div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
    <img src="{{ asset('assets/images/Globalization-pana.png') }}" class="img-fluid" alt="">
</div>

@endsection