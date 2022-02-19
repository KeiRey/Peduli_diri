@extends('perjalanan.app')
@section('content')
<table class="table table-responsive table-hover">
    <thead>
        <tr>
            <th scope="col" style="width: 6%;">#</th>
            <th scope="col" style="width: 22%;">Nama Perjalanan</th>
            <th scope="col" style="width: 14%;">Tanggal</th>
            <th scope="col" style="width: 14%;">Jam</th>
            <th scope="col" style="width: 14%;">Lokasi</th>
            <th scope="col" style="width: 16%;">Suhu Tubuh</th>
            <th scope="col" style="width: 12%;">
                <a href="/create" class="btn btn-primary btn-sm">Tambah</a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $no => $isi)
        <tr>
            <th>{{ $data->firstItem() + $no }}</th>
            <td>{{ $isi->nama_perjalanan }}</td>
            <td>{{ $isi->tanggal  }}</td>
            <td>{{ $isi->jam  }}</td>
            <td>{{ $isi->lokasi  }}</td>
            <td>{{ $isi->suhu_tubuh  }}°</td>
            <td >
                <a href="/delete/{{ $isi->id }}" class="ml-4 text-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    @if(!empty($data))
    <div class="col-md-6 mt-3">
        Tampilan
        {{ $data->firstItem() }}
        Sampai
        {{ $data->lastItem() }}
        Item
    </div>
    @else
    <div class="col-md-6 mt-3">
        Data Masih Kosong
    </div>
    @endif
    <div class="col-md-6 d-flex justify-content-end mt-3">
        {{ $data->links() }}
    </div>

</div>
@stop