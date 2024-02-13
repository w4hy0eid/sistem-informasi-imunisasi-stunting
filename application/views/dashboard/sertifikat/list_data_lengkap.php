<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Balita</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('dashboard/_partials/css') ?>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <?php $this->load->view('dashboard/_partials/navbar') ?>
    <!-- Sidebar menu-->
    <?php $this->load->view('dashboard/_partials/sidebar') ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> Data Balita Imunisasi Lengkap</h1>
                <p>List data balita yang sudah lengkap imunisasi</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="row ">
                        <div class="col">
                            <h4 class="m-0 font-weight-bold text-primary">
                                Data Balita Imunisasi
                            </h4>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-striped" id="listdatalengkap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Balita</th>
                                    <th>Nama Ibu</th>
                                    <th>Nama Ayah</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Usia</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <?php $this->load->view('dashboard/pelayanan/form_tambah_balita') ?>
</body>
<?php $this->load->view('dashboard/_partials/js') ?>
<script type="text/javascript">
    //Serverside List Data Balita
    var table;
    $(document).ready(function() {
        table = $('#listdatalengkap').DataTable({
            "bDestroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                url: "<?= base_url() ?>serverside/list_data_lengkap",
                type: "POST",
                data: {}
            },
            "initComplete": function(settings, json) {
                $("#csrfHash").val(json.error_code);
            },
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],


        });

    });

    //Delete Data Balita
    $(document).ready(function() {
        $(document).delegate('.deletebalita', 'click', function() {
            swal({
                    title: "Yakin ingin menghapus Data Balita?",
                    text: "Data yang telah dihapus tidak dapat dikembalikan !",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        var id = $(this).attr('id');
                        $.ajax({
                            method: 'post',
                            url: domain + "proses/delete_data_balita",
                            data: {
                                id: id,
                            },
                            success: function(result) {
                                d = JSON.parse(result);
                                if (d.message == "success") {
                                    swal({
                                        text: "Data Berhasil dihapus !",
                                        icon: "success",
                                        button: false,
                                        timer: 1500,
                                    });
                                } else {
                                    swal({
                                        text: "Data Gagal dihapus !",
                                        icon: "error",
                                        button: false,
                                        timer: 1500,
                                    });
                                }
                                $('#listdatabalita').DataTable({
                                    "bDestroy": true,
                                    "processing": true,
                                    "serverSide": true,
                                    "order": [],

                                    "ajax": {
                                        url: domain + "serverside/list_data_balita",
                                        type: "POST",
                                        data: {}
                                    },
                                    "initComplete": function(settings, json) {
                                        $("#csrfHash").val(json.error_code);
                                    },
                                    "columnDefs": [{
                                        "targets": [0],
                                        "orderable": false,
                                    }, ],


                                });
                            }
                        });
                    }

                });
        });
    });
</script>

</html>