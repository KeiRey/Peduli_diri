@extends('layouts.app', ['title' => 'Profile'])
@section('content')
<div class="card mt-5">
    <div class="card-body">
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    @include('layouts.profil')
                    <div class="col-lg-9 col-md-6">
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
                                <td>{{ $user->nik ?? "Tidak ada data" }}</td>
                            </tr>
                            <tr>
                                <td>No Telpon</td>
                                <td>:</td>
                                <td>{{ $user->no_telp ?? "Tidak ada data" }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $user->alamat ?? " Belum ada data " }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 mt-5">
                        <form method="POST" action="/profile" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" class=" col-form-label text-md-right">Nama</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nik" class="col-form-label text-md-right">nik</label>
                                <input id="nik" maxlength="16" type="nik" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $user->nik }}" required autocomplete="nik">

                                @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div>
                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <label for="email" class="col-form-label text-md-right">Provinsi, Kota, Kecamatan, Kelurahan</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selectProvinsi">Provinsi</label>
                                            </div>
                                            <select class="custom-select" id="selectProvinsi">
                                                <option selected>Pilih Provinsi</option>
                                            </select>
                                        </div>

                                        <div class="input-group mt-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selectProvinsi">Kota</label>
                                            </div>
                                            <select class="custom-select" id="selectKota">

                                            </select>
                                        </div>
                                        <div class="input-group mt-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selectKecamatan">Kecamatan</label>
                                            </div>
                                            <select class="custom-select" id="selectKecamatan">

                                            </select>
                                        </div>
                                        <div class="input-group mt-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="selectKelurahan">Kelurahan</label>
                                            </div>
                                            <select class="custom-select" id="selectKelurahan">

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="flex-grow-1">
                                    <label for="alamat" class="col-form-label text-md-right">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat" rows="3">
                                    {{ $user->alamat }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="gambar" class="col-form-label text-md-right">Profil</label>
                                <input id="gambar" type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{ $user->gambar }}" autocomplete="gambar">

                                @error('gambar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <label for="email" class="col-form-label text-md-right">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <label for="no_telp" class="col-form-label text-md-right">No Telepon</label>
                                <input id="no_telp" maxlength="12" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $user->no_telp }}" required autocomplete="no_telp" autofocus>

                                @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>

                            <div class="row">
                                <div class="col-md-6 ">
                                    <a href="/index" class="btn btn-danger">Kembali</a>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-pencil-alt"></i> Edit
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    let selectProvinsi = document.getElementById('selectProvinsi');
    let selectKota = document.getElementById('selectKota');
    let selectKecamatan = document.getElementById('selectKecamatan');
    let selectKelurahan = document.getElementById('selectKelurahan');
    let alamat = document.getElementById('alamat');
    document.addEventListener("DOMContentLoaded", function() {
        fetchProvinsi();
        selectKota.style.display = "none";
        selectKecamatan.style.display = "none";
        selectKelurahan.style.display = "none";
        // fetchKota();
        // fetchKecamatan();
        // fetchKelurahan();
        getValueToAlamat();
    });
    const config = {
        method: "GET"
    };
    async function fetchProvinsi() {
        const URL = 'http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json';
        await fetch(URL, config)
            .then(response => response.json())
            .then(provinsi => {
                if (provinsi !== null || undefined) {
                    provinsi.map(data => {
                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectProvinsi.appendChild(opt);
                    })
                } else {
                    let opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "Data tidak tersedia";
                    selectKelurahan.appendChild(opt);
                }
            }).catch(error => alert(`Data provinsi tidak ada`));
    }
    async function fetchKota(id) {
        const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
        await fetch(URL, config)
            .then(response => response.json())
            .then(kota => {
                if (kota !== null || undefined) {
                    kota.map(data => {
                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectKota.appendChild(opt);
                    })
                } else {
                    let opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "Data tidak tersedia";
                    selectKelurahan.appendChild(opt);
                }
            });
    }
    async function fetchKecamatan(id) {
        const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? "" : id}.json`;
        await fetch(URL, config)
            .then(response => response.json())
            .then(kecamatan => {
                if (kecamatan !== null || undefined) {
                    kecamatan.map(data => {
                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectKecamatan.appendChild(opt);
                    })
                } else {
                    let opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "Data tidak tersedia";
                    selectKelurahan.appendChild(opt);
                }
            });
    }
    async function fetchKelurahan(id) {
        const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
        await fetch(URL, config)
            .then(response => response.json())
            .then(kelurahan => {
                if (kelurahan !== null || undefined) {
                    kelurahan.map(data => {
                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectKelurahan.appendChild(opt);
                    })
                } else {
                    let opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "Data tidak tersedia";
                    selectKelurahan.appendChild(opt);
                }
            });
    }
    // selectProvinsi.addEventListener('change', () => {
    //     console.log(selectProvinsi.options[selectProvinsi.selectedIndex].text);
    // })
    selectProvinsi.addEventListener('change', () => {
        fetchKota(selectProvinsi.value);
        selectKota.style.display = "block";
        selectKota.innerHTML = '';
        selectKecamatan.innerHTML = '';
        selectKelurahan.innerHTML = '';
    });
    selectKota.addEventListener('change', () => {
        fetchKecamatan(selectKota.value);
        selectKecamatan.style.display = "block";
        selectKecamatan.innerHTML = '';
        selectKelurahan.innerHTML = '';
    });
    selectKecamatan.addEventListener('change', () => {
        fetchKelurahan(selectKecamatan.value);
        selectKelurahan.style.display = "block";
        selectKelurahan.innerHTML = '';
    });

    function getValueToAlamat() {
        alamat.addEventListener('change', () => {
            let alamatText = alamat.value;
            document.getElementById('alamat').value = `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
            // console.log(`${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKota.options[selectKota.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
        });
    }
</script>
@stop