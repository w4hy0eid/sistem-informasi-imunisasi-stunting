<!DOCTYPE html>
<html lang="en">

<head>
    <title>Whatsapp Broadcast</title>
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
    <!-- Body Content -->
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-mobile"></i> Perangkat Whatsapp</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Perangkat Whatsapp</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p id="error"></p>
                <div class="tile">
                    <div class="tile-body">
                        <p><button class="btn btn-info" type="button" data-toggle="modal" data-target="#AddDevices">Tambah Perangkat</button></p>
                        <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomor Whatsapp</th>
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

    <!-- Modal Add Device -->
    <div class="modal fade" id="AddDevices" tabindex="-1" role="dialog" aria-labelledby="AddDevices" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddDevices">Add Device</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="addfevice" onsubmit="return false">

                        <div class="form-group">
                            <label>Phone</label>
                            <input type='text' class='form-control' name='phone' id="phone" value='' placeholder="Enter your phone with country code (Ex: 628123456)">
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="add-device btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Qr Code -->
    <div class="modal fade" id="QrCode" tabindex="-1" role="dialog" aria-labelledby="QrCode" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="QrCode">QR Code</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div id="qrcode"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="DeleteModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteModal">Delete Success</h5>
                </div>
            </div>
        </div>
    </div>
</body>
<?php $this->load->view('dashboard/_partials/js') ?>
<script type="text/javascript">
    //Serverside
    var table;
    $(document).ready(function() {
        var csrfHash = $("#csrfHash").val();
        table = $('#table').DataTable({
            "bDestroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                url: "http://localhost/wabc/devices/get_list_devices",
                type: "POST",
                data: {
                    <?php echo $this->security->get_csrf_token_name(); ?>: $("#csrfHash").val()
                }
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