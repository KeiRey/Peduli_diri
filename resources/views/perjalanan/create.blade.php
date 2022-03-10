@extends('perjalanan.app', ['title' => 'Create'])
@section('content')
<div class="card mt-5">
    <div class="card-body">
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    @include('perjalanan.profil')

                    <div class="col-lg-9 col-md-6">
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

                            <div class="d-flex justify-content-end">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Tambah</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </section>
    </div>
</div>

@stop