{{-- @extends('layouts.app', ['title' => 'Index'])
@section('content')
<div class="card mt-5">
    <div class="card-body">
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    @include('layouts.profil')
                    <div class="col-lg-9 col-md-6">
                        <a href="/user/cetak_pdf" target="blank" class="btn btn-sm btn-success mr-3">PDF USER</a>
                        <a href="/admin/cetak_pdf" target="blank" class="btn btn-sm btn-primary">PDF Admin</a>
                        <table class="table table-responsive table-hover mt-3">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 4%;">#</th>
                                    <th scope="col" style="width: 18%;">NIK</th>
                                    <th scope="col" style="width: 24%;">Nama</th>
                                    <th scope="col" style="width: 16%;">Email</th>
                                    <th scope="col" style="width: 18%;">No Telpon</th>
                                    <th scope="col" style="width: 17%;">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $no => $isi)
                                    <tr>
                                        <td>{{ $no+1 }}</td>
                                        <td>{{ $isi->nik }}</td>
                                        <td>{{ $isi->name }}</td>
                                        <td>{{ $isi->email }}</td>
                                        <td>{{ $isi->no_telp }}</td>
                                        <td>{{ $isi->alamat }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                             
                            </div>
                            <div class="col-md-6 d-flex justify-content-end mt-3">
                                
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
    </div>
</div>

@stop --}}

@extends('layouts.app', ['title' => 'Index'])
@section('content')
<div class="row mt-5">
    <div class="col-md-12 biasa-aja">
               <div class="col-lg-12">
                     <a href="/user/cetak_pdf" target="blank" class="btn btn-sm btn-success mr-3">PDF USER</a>
                        <a href="/admin/cetak_pdf" target="blank" class="btn btn-sm btn-primary">PDF Admin</a>
                            <table class="table table-responsive table-hover mt-3">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 4%;">#</th>
                                    <th scope="col" style="width: 16%;">NIK</th>
                                    <th scope="col" style="width: 16%;">Nama</th>
                                    <th scope="col" style="width: 14%;">Role</th>
                                    <th scope="col" style="width: 16%;">Email</th>
                                    <th scope="col" style="width: 16%;">No Telpon</th>
                                    <th scope="col" style="width: 18%;">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($user as $no => $isi)
                                    <tr>
                                        <td>{{ $no+1 }}</td>
                                        <td>{{ $isi->nik }}</td>
                                        <td>{{ $isi->name }}</td>
                                        <td>{{ $isi->level }}</td>
                                        <td>{{ $isi->email }}</td>
                                        <td>{{ $isi->no_telp }}</td>
                                        <td>{{ $isi->alamat }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                Halaman
                                {{ $user->currentPage() }}
                               
                            </div>
                            <div class="col-md-6 d-flex justify-content-end mt-3">
                                {{ $user->links() }}
                            </div>
                        </div>
                    </div>

    </div>
</div>
      

@stop