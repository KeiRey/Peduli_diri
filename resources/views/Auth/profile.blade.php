@extends('perjalanan.app')
@section('content')

<div class="alert alert-primary" role="alert">
    <h3>Profile</h3>
</div>
<table class="table table-hover">
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $user->name }}</td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td>{{ $user->nik }}</td>
    </tr>
    <tr>
        <td>No Telpon</td>
        <td>:</td>
        <td>{{ $user->no_telp }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{ $user->email }}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{ $user->alamat }}</td>
    </tr>
</table>

<a href="/edit/profile/{{$user->id}}" class="btn btn-primary">Edit</a>

@stop