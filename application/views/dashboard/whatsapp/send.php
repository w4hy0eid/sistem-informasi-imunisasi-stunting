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
                <h1><i class="fa fa-paper-plane"></i> Whatsapp Broadcast</h1>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Whatsapp Broadcast</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Whatsapp Broadcast</h3>

                    <div class="body">
                        <div id="error"></div>
                        <div class="form-group">
                            <label for="device">Perangkat Whatsapp</label>
                            <select class="form-control" name="device" id="device"></select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <input type="hidden" id="csrfHash" value="<?php echo $this->security->get_csrf_hash(); ?>">
                        <button class="btn btn-primary" type="submit" id="send"><i class="fa fa-paper-plane"></i> Kirim</button>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">List Nomor Tujuan</h3>
                    <div class="body">
                        <div class="form-group">
                            <label for="device">Pilih Data Desa</label>
                            <select class="form-control" name="alamat" id="alamat"></select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">List Nomor</label>
                            <textarea class="form-control" rows="4" name="list" id="list" placeholder="628xxxxxxx
628xxxxxxx
628xxxxxxx
628xxxxxxx
628xxxxxxx
628xxxxxxx"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Status Pengiriman</h3>
                    <div class="body">
                        <p id="interactive"></p>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- JavaScript -->
</body>
<?php $this->load->view('dashboard/_partials/js') ?>
<script type="text/javascript">
    //Select 2 Pelayanan Cari Data Balita
    $("#device").select2({
        placeholder: "--- Pilih Perangkat ---",
        ajax: {
            url: domain + "proses/cari_balita",
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: data,
                };

            },
            cache: true
        },
    });
    //Select 2 Pelayanan Cari Data Balita
    $("#alamat").select2({
        placeholder: "--- Pilih Data Desa ---",
        ajax: {
            url: domain + "proses/cari_balita",
            dataType: 'json',
            delay: 250,
            processResults: function(data) {
                return {
                    results: data,
                };

            },
            cache: true
        },
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