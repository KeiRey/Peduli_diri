@extends('layouts.app', ['title' => 'Index'])
@section('content')
<div class="row mt-5">
    <div class="col-md-3">
          <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    @include('layouts.profil')
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-9">
               <div class="col-lg-12">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 4%;">#</th>
                                    <th scope="col" style="width: 22%;">Nama Perjalanan</th>
                                    <th scope="col" style="width: 14%;">Tanggal</th>
                                    <th scope="col" style="width: 12%;">Jam</th>
                                    <th scope="col" style="width: 14%;">Lokasi</th>
                                    <th scope="col" style="width: 17%;">Suhu Tubuh</th>
                                    <th scope="col" style="width: 15%;">
                                        <a href="/create" class="btn btn-sm btn-outline-success" >Tambah</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $no => $isi)
                                <tr>
                                    <th>{{ $data->firstItem() + $no }}</th>
                                    <td>{{ Str::upper($isi->nama_perjalanan) }}</td>
                                    <td>{{ $isi->tanggal  }}</td>
                                    <td>{{ $isi->jam  }}</td>
                                    <td>{{ $isi->lokasi  }}</td>
                                    <td>{{ $isi->suhu_tubuh  }}°</td>
                                    <td>
                                        <a href="/delete/{{ $isi->id }}" class="ml-4 text-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                Halaman
                                {{ $data->currentPage() }}
                               
                            </div>
                            <div class="col-md-6 d-flex justify-content-end mt-3">
                                {{ $data->links() }}
                            </div>
                        </div>
                    </div>

    </div>
</div>
      

@stop