@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Verify Your Email Address') }}</div>
                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Kami telah mengirimkan pesan ke email kamu, Silahkan cek email sekarang') }}
                    {{ __('jika belum menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('KLIK DISINI UNTUK PESAN TERBARU') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection