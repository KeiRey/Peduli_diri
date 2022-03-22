@extends('layouts.app', ['title' => 'Login'])
@section('content')
<div class="col-md-6">
    <img src="{{asset('images/Travelers-bro.png')}}" alt="Image" class="img-fluid">
</div>
<div class="col-md-6 contents">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-4">
                <h3>Register</h3>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group first">
                    <input id="name" placeholder="Username" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">
                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group last mb-4">

                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">
                <div class="d-flex mt-3 align-items-center">
                    <a href="{{ route('login') }}" class="forgot-pass"> Sudah Punya Akun </a>
                </div>

            </form>
        </div>
    </div>

</div>
@stop