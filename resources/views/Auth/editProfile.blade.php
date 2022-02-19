@extends('perjalanan.app')
@section('content')


<form method="POST" action="/profile" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label text-md-right">Nama</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="nik" class="col-md-2 col-form-label text-md-right">nik</label>

        <div class="col-md-6">
            <input id="nik" type="nik" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $user->nik }}" required autocomplete="nik">

            @error('nik')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="gambar" class="col-md-2 col-form-label text-md-right">Profil</label>

        <div class="col-md-6">
            <input id="gambar" type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{ $user->gambar }}" autocomplete="gambar">

            @error('gambar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="no_telp" class="col-md-2 col-form-label text-md-right">No Telepon</label>
        <div class="col-md-6">
            <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $user->no_telp }}" required autocomplete="no_telp" autofocus>

            @error('no_telp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat" class="col-md-2 col-form-label text-md-right">Alamat</label>
        <div class="col-md-6">
            <textarea for="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" required="">{{ $user->alamat }}</textarea>

            @error('alamat')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-2">
            <a href="/profile" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-pencil-alt"></i> Edit
            </button>
        </div>
    </div>
</form>


@stop