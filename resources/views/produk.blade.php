<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <!-- Modal Content -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama :</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Stok :</label>
                            <input type="number" class="form-control" id="stok">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary btnBuat">Tambah</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container p-3">
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md-3">
                <a class="btn btn-primary col-md-12  btnAdd">Tambah Data</a>
            </div>
        </div>
        <table class="table table-brder table-hover mt-3 text-center">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Stok</th>
                <th>#</th>
            </thead>
            <tbody id="tujuan">

            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            getDataFromDB();

            function resetModal() {
                $("#modalTambah").modal("hide");
                $("#nama").val();
                $("#stok").val();
            }
            //ADD Data
            $(".btnAdd").on("click", function() {
                // alert("ok");
                $("#modalTambah").modal("show");

                $(".btnBuat").on("click", function() {
                    var namaProduk = $("#nama").val();
                    var stokProduk = $("#stok").val();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        method: 'POST',
                        url: "{{ url('/storeData') }}",
                        data: {
                            'namaProduk': namaProduk,
                            'stokProduk': stokProduk,
                        },
                        success: function(e) {
                            resetModal();
                            getDataFromDB();
                        },
                    });
                });
            })

            //Read Data
            function getDataFromDB() {
                var x = '';
                $.ajax({
                    method: 'GET',
                    url: "{{ url('/getData') }}",
                    success: function(res) {
                        $.each(res, function(index, item) {
                            x = x + '<tr>' +
                                '<td>' + item.id + '</td>' +
                                '<td>' + item.nama + '</td>' +
                                '<td>' + item.stok + '</td>' +
                                '<td>' +
                                '<a class="btn btn-danger btn-sm btnDelete" itemID=' + item.id + '>Hapus</a>&nbsp' +
                                '<a class="btn btn-warning btn-sm" itemID=' + item.id + '>Edit</a>' +
                                '</td>' +
                                '</tr>';
                        })
                        $("#tujuan").html(x);
                        $(".btnDelete").on('click', function() {
                            var idData = $(this).attr("itemID");
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                method: "POST",
                                url: '{{ url("/destroyData") }}',
                                data: {
                                    'idData': idData,
                                },
                                success: function(e) {
                                    getDataFromDB();
                                }
                            });
                        })
                    }
                })
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>