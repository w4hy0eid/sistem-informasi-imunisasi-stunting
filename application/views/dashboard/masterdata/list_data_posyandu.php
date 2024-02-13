<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Posyandu</title>
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
                <h1><i class="fa fa-hdd-o"></i> Master Data</h1>
                <p>List data posyandu</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="row ">
                        <div class="col">
                            <h4 class="m-0 font-weight-bold text-primary">
                                Data Semua Posyandu
                            </h4>
                        </div>
                        <div class="col-auto">
                            <select class="form-control" id="posyandu" onchange="PosyanduOnChangeHandler(this)">
                                <option value="">Pilih Posyandu</option>
                                <?php foreach ($posyandu as $nama_posyandu) : ?>
                                    <option value="<?= $nama_posyandu->nama_posyandu ?>"><?= $nama_posyandu->nama_posyandu ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-auto">

                            <button class="btn btn-primary btn-xs" type="button" data-toggle="modal" data-target="#AddPosyandu"><i class="fa fa-plus"></i> Tambah Posyandu</button>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-striped" id="listdataposyandu">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Posyandu</th>
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
    <?php $this->load->view('dashboard/masterdata/form_tambah_posyandu') ?>
</body>
<?php $this->load->view('dashboard/_partials/js') ?>
<script type="text/javascript">
    var table;
    //Select Posyandu
    function PosyanduOnChangeHandler(table) {
        var select = document.getElementById('posyandu');
        var index = select.selectedIndex;
        var given_text = select.options[index].value;
        $(".form-control-sm").val(given_text);
        CariPosyandu(given_text)
    }

    //cari Posyandu
    function CariPosyandu(value) {
        table = $('#listdataposyandu').DataTable({
            "bDestroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                url: domain + "serverside/list_data_posyandu",
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
        table.search(value).draw();
    }
    //Serverside List Data Posyandu

    $(document).ready(function() {
        table = $('#listdataposyandu').DataTable({
            "bDestroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                url: domain + "serverside/list_data_posyandu",
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
                    title: "Yakin ingin menghapus Data ?",
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
                            url: domain + "proses/delete_data_posyandu",
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
                                $('#listdataposyandu').DataTable({
                                    "bDestroy": true,
                                    "processing": true,
                                    "serverSide": true,
                                    "order": [],

                                    "ajax": {
                                        url: domain + "serverside/list_data_posyandu",
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

    //Tambah Data Posyandu
    function TambahDataPosyandu() {
        event.preventDefault();
        var nama_posyandu = $("#nama_posyandu").val();
        if (nama_posyandu.length == 0) {
            swal({
                title: "Perhatian!",
                text: "Form tidak boleh kosong !",
                icon: "warning",
                button: false,
                timer: 1500,
            });
        } else {
            let formData = new FormData($('#formtambahdataposyandu')[0]);
            $.ajax({
                type: 'POST',
                url: domain + "proses/simpan_data_posyandu",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                success: function(result) {
                    d = JSON.parse(result);
                    swal({
                        text: d.message,
                        icon: d.type,
                        button: false,
                        timer: 1500,
                    });

                    $("#nama_posyandu").val("");
                    $('#AddPosyandu').modal("hide");
                    $('#listdataposyandu').DataTable({
                        "bDestroy": true,
                        "processing": true,
                        "serverSide": true,
                        "order": [],

                        "ajax": {
                            url: domain + "serverside/list_data_posyandu",
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
    }
</script>

</html>