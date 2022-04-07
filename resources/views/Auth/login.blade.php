@extends('layouts.app', ['title' => 'Login'])
@section('content')
    <div class="col-md-6">
        <div data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('assets/images/Around the world-bro.png') }}" alt="Image" class="img-fluid">
        </div>
    </div>
    <div class="col-md-6 contents">
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                <div class="mb-4">
                    <h3>Sign In</h3>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group first">
                        <input id="email" type="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group last mb-4">

                        <input id="password" placeholder="Password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                    <div class="d-flex mb-3 align-items-center">
                        <label class="control control--checkbox mb-0"><span class="caption">
                                {{ __('Remember Me') }}</span>
                            <input type="checkbox" checked="checked" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }} />
                            <div class="control__indicator"></div>
                        </label>
                    </div>

                    <input type="submit" value="Log In" class="btn btn-block btn-primary">
                    <div class="d-flex mt-3 align-items-center">
                        <a href="{{ route('register') }}" class="forgot-pass"> Belum Punya Akun ? </a>
                        <span class="ml-auto">

                            @if (Route::has('password.request'))
                                <a class="forgot-pass" href=" {{ route('password.request') }}">
                                    {{ __('Lupa Password?') }}
                                </a>
                            @endif
                        </span>
                    </div>
                </form>
            </div>
        </div>

    </div>
@stop
