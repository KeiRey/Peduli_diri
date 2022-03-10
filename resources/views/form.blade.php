<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Provinsi</label>
                    <select class="form-control" id="provinsi">
                        <option>--Pilih Provinsi--</option>
                        @foreach($provinces as $provinsi)
                        <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kabupaten</label>
                    <select class="form-control" id="kabupaten">
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kecamatan</label>
                    <select class="form-control" id="kecamatan">
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Desa</label>
                    <select class="form-control" id="desa">
                    </select>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function() {
                $('#provinsi').on('change', function() {
                    let id_provinsi = $('#provinsi').val();


                    $.ajax({
                        type: 'POST',
                        url: "{{route('getkabupaten')}}",
                        data: {
                            id_provinsi: id_provinsi
                        },
                        cache: false,

                        success: function(msg) {
                            $('#kabupaten').html(msg);
                            $('#kecamatan').html('');
                            $('#desa').html('');
                        },
                        error: function(data) {
                            console.log('error:', data)
                        },
                    })
                })

                $('#kabupaten').on('change', function() {
                    let id_kabupaten = $('#kabupaten').val();


                    $.ajax({
                        type: 'POST',
                        url: "{{route('getkecamatan')}}",
                        data: {
                            id_kabupaten: id_kabupaten
                        },
                        cache: false,

                        success: function(msg) {
                            $('#kecamatan').html(msg);
                            $('#desa').html('');

                        },
                        error: function(data) {
                            console.log('error:', data)
                        },
                    })
                })

                $('#kecamatan').on('change', function() {
                    let id_kecamatan = $('#kecamatan').val();


                    $.ajax({
                        type: 'POST',
                        url: "{{route('getdesa')}}",
                        data: {
                            id_kecamatan: id_kecamatan
                        },
                        cache: false,

                        success: function(msg) {
                            $('#desa').html(msg);

                        },
                        error: function(data) {
                            console.log('error:', data)
                        },
                    })
                })
            });


        });
    </script>

</body>

</html>