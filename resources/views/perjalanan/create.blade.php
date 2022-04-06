@extends('layouts.app', ['title' => 'Index'])
@section('content')
    <div class="biasa-aja">
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
                    <form method="POST" action="/store">@csrf
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Nama Perjalanan</label>
                                    <input class="input--style-4" type="text" name="nama_perjalanan">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Tanggal</label>
                                    <input class="input--style-4 js-datepicker" type="text" name="tanggal">

                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Jam</label>
                                    <input class="input--style-4" type="time" name="jam">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Lokasi Perjalanan</label>
                                    <input class="input--style-4" type="text" name="lokasi">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-12">
                                <div class="input-group">
                                    <label class="label">Suhu Tubuh</label>
                                    <input class="input--style-4" type="text" name="suhu_tubuh">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="" class="btn btn-danger">Kembali</a>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <button class="btn btn-success" type="submit">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop
