@extends('perjalanan.app')
@section('content')

<head>
    <link href="{{asset('assets-form/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets-form/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('assets-form/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets-form/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets-form/css/main.css')}}" rel="stylesheet" media="all">
</head>
<body>
    <div class="card card-4">
        <div class="card-body">
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
                            <!-- <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i> -->
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
    <script src="{{asset('assets-form/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets-form/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets-form/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets-form/vendor/datepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('assets-form/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

@stop