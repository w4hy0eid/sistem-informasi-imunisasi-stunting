<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pelayanan Imunisasi</title>
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
                <h1><i class="fa fa-laptop"></i> Pelayanan Imunisasi</h1>
                <p>Pelayanan Imunisasi</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form class="navbar-search ">
                    <div class="input-group ">
                        <select class="form-control" name="cari_balita" id="cari_balita"></select>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 ">

                <div class="row">
                    <div class="col-md-6 profile">
                        <div class="card ">
                            <div class="title pt-3">
                                <h4 class="text-primary text-center">Biodata Balita</h4>

                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" id="id_balita">
                                            <label class="col-form-label" for="inputDefault">Nama</label>
                                            <input readonly class="form-control" type="text" id="nama_lengkap" placeholder="Nama Anak">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label for="" class="col-form-label" for="inputDefault">Jenis
                                                Kelamin</label>
                                            <input readonly class="form-control" type="text" id="jenis_kelamin" placeholder="Jenis Kelamin">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="inputDefault">Tempat
                                                        Lahir</label>
                                                    <input readonly class="form-control" type="text" id="tempat_lahir" placeholder="Tempat Lahir">
                                                </div>
                                            </div>
                                            <div class="col-5 pl-0">
                                                <label class="col-form-label" for="inputDefault">Tanggal
                                                    Lahir</label>
                                                <div class="form-group">
                                                    <input readonly class="form-control" id="tanggal_lahir" type="date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="inputDefault">Nama Ibu</label>
                                                    <input readonly class="form-control" type="text" id="nama_ibu" placeholder="Nama Ibu">
                                                </div>
                                            </div>
                                            <div class="col-5 pl-0">
                                                <label class="col-form-label" for="inputDefault">Nama Ayah</label>
                                                <div class="form-group">
                                                    <input readonly class="form-control" type="text" id="nama_ayah" placeholder="Nama Bapak">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 informasi pelayanan ">
                        <div class="card ">
                            <div class="title pt-3">
                                <h4 class="text-primary text-center">Informasi Pelayanan</h4>
                            </div>
                            <div class="row pl-3">
                                <div class="col-10">
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputDefault">Usia</label>
                                        <input readonly class="form-control" type="text" id="usia" placeholder="Usia Anak">
                                        <input class="form-control" type="hidden" id="usia_bulan" placeholder="Usia Anak">
                                    </div>
                                </div>
                            </div>
                            <div class="row pl-3">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputDefault">Rekomendasi
                                            Imunisasi</label>
                                        <input readonly class="form-control" type="text" id="rekomendasi" placeholder="Imunisasi A">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputDefault">Range Usia</label>
                                        <input readonly class="form-control" type="text" id="range" placeholder="0-2 Bulan">
                                    </div>
                                </div>
                            </div>

                            <div class="row pl-3">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="exampleSelect1">Jenis Imunisasi</label>
                                        <select class="form-control" id="jenis_vaksin">
                                            <option value="HB 0 < 24 JAM">HB 0 < 24 JAM</option>
                                            <option value="HB 0 1-7 HARI">HB 0 1-7 HARI</option>
                                            <option value="BCG">BCG</option>
                                            <option value="OPV 1">OPV 1</option>
                                            <option value="DPT-HB-Hib 1">DPT-HB-Hib 1</option>
                                            <option value="OPV 2">OPV 2</option>
                                            <option value="PCV 1">PCV 1</option>
                                            <option value="DPT-HB-Hib 2">DPT-HB-Hib 2</option>
                                            <option value="OPV 3">OPV 3</option>
                                            <option value="PCV 2">PCV 2</option>
                                            <option value="DPT-HB-Hib 3">DPT-HB-Hib 3</option>
                                            <option value="OPV 4">OPV 4</option>
                                            <option value="IPV">IPV</option>
                                            <option value="CAMPAK/MR 1">CAMPAK/MR 1</option>
                                            <option value="IDL">IDL</option>
                                            <option value="PCV 3">PCV 3</option>
                                            <option value="DPT-HB-Hib 4">DPT-HB-Hib 4</option>
                                            <option value="MR2">MR2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="col-form-label" for="inputDefault">Tanggal</label>
                                        <input class="form-control" type="date" id="tanggal_sekarang" value="<?= date("Y-m-d") ?>" placeholder=" hh/bb/tt">
                                    </div>
                                </div>
                            </div>
                            <div class="row pl-3">
                                <div class="col-5">
                                    <div class="form-group">
                                        <button type="bunnton" class="btn btn-primary" onclick="TambahRiwayat();">Simpan Riwayat Imunisasi</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid ">
            <div class="row mt-3  ">
                <div class="col-12 card ">
                    <div class="title pl-1 pt-3">
                        <h4 class="text-primary">Riwayat Imunisasi</h4>
                    </div>

                    <div class="table-responsive mt-3">
                        <table class="table table-striped" id="riwayatimunisasi">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Imunisasi</th>
                                    <th>Tanggal Imunisasi</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </main>
    <?php $this->load->view('dashboard/_partials/js') ?>
</body>
<script type="text/javascript">
    //Select 2 Pelayanan Cari Data Balita
    $("#cari_balita").select2({
        placeholder: "--- Cari Balita ---",
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

    function HitungUsia(tanggal_lahir) {
        $.ajax({
            url: "<?= base_url() ?>proses/hitung_umur1",
            method: 'post',
            data: {
                tanggal_lahir: tanggal_lahir,
            },
            success: function(result) {
                d = JSON.parse(result);
                $("#usia").val(d.usia);
                $("#usia_bulan").val(d.usia_bulan);
                $('#rekomendasi').val(d.rekomendasi_imusisasi);
                $('#range').val(d.range);
                $("#tanggal_sekarang").val(d.now);
            }
        });
    }

    //Cari Balita
    $('#cari_balita').on('select2:select', function(e) {
        var id = $("#cari_balita").val();

        $.ajax({
            url: "<?= base_url() ?>proses/ambil_data_balita",
            method: 'post',
            data: {
                id: id,
            },
            success: function(result) {
                d = JSON.parse(result);
                $("#id_balita").val(d.id_balita);
                $("#nama_lengkap").val(d.nama_balita);
                $("#jenis_kelamin").val(d.jenis_kelamin);
                $("#tempat_lahir").val(d.tempat_lahir);
                $("#tanggal_lahir").val(d.tanggal_lahir);
                $("#nama_ibu").val(d.nama_ibu);
                $("#nama_ayah").val(d.nama_ayah);

                if (d.tanggal_lahir.length > 0) {
                    HitungUsia(d.tanggal_lahir);
                }

            }
        });

        //Serverside data Riwayat Imunisasi
        var table;
        table = $('#riwayatimunisasi').DataTable({
            "bDestroy": true,
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                url: domain + "serverside/list_riwayat_imunisasi",
                type: "POST",
                data: {
                    id: id,
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


    //Tambah Data Riwayat Imunisasi
    function TambahRiwayat() {
        var jenis_vaksin = $("#jenis_vaksin").val();
        var tanggal_sekarang = $("#tanggal_sekarang").val();
        var usia_bulan = $("#usia_bulan").val();
        var id_balita = $("#id_balita").val();
        if (id_balita.length == 0) {
            swal({
                title: "Perhatian!",
                text: "Pilih data balita terlebih dahulu !",
                icon: "warning",
                button: false,
                timer: 1500,
            });
        } else if (tanggal_sekarang.length == 0) {
            swal({
                title: "Perhatian!",
                text: "Tanggal tidak boleh kosong !",
                icon: "warning",
                button: false,
                timer: 1500,
            });
        } else {
            $.ajax({
                type: 'POST',
                url: domain + "proses/simpan_riwayat_imunisasi",
                data: {
                    id_balita: id_balita,
                    nama_vaksin: jenis_vaksin,
                    usia_bulan: usia_bulan,
                    tanggal_vaksin: tanggal_sekarang
                },
                success: function(result) {
                    d = JSON.parse(result);
                    swal({
                        text: d.message,
                        icon: d.type,
                        button: false,
                        timer: 1500,
                    });
                    $('#riwayatimunisasi').DataTable({
                        "bDestroy": true,
                        "processing": true,
                        "serverSide": true,
                        "order": [],

                        "ajax": {
                            url: domain + "serverside/list_riwayat_imunisasi",
                            type: "POST",
                            data: {
                                id: id_balita,
                            }
                        },
                        "initComplete": function(settings, json) {

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