<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data Balita</title>
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
                <h1><i class="fa fa-laptop"></i>Edit Data Balita</h1>
                <p>Edit Data </p>
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
                                            <label class="col-form-label" for="inputDefault">Nama</label>
                                            <input type="hidden" id="id_balita" value="<?= $detail->id_balita ?>">
                                            <input class="form-control" type="text" id="nama_balita" value="<?= $detail->nama_balita ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputDefault">Nama Ibu</label>
                                            <input class="form-control" type="text" id="nama_ibu" value="<?= $detail->nama_ibu ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputDefault">Nama Ayah</label>
                                            <input class="form-control" type="text" id="nama_ayah" value="<?= $detail->nama_ayah ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label for="" class="col-form-label" for="inputDefault">Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                <option value="<?= $detail->jenis_kelamin ?>"><?= $detail->jenis_kelamin ?></option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                                </select>
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
                                                    <input class="form-control" type="text" id="tempat_lahir" value="<?=$detail->tempat_lahir?>">
                                                </div>
                                            </div>
                                            <div class="col-5 pl-0">
                                                <label class="col-form-label" for="inputDefault">Tanggal
                                                    Lahir</label>
                                                <div class="form-group">
                                                    <input class="form-control" id="tanggal_lahir" type="date" value="<?=$detail->tanggal_lahir?>">
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
                           
                        <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputDefault">Alamat</label>
                                            <input class="form-control text-" type="text" id="alamat" value="<?= $detail->alamat ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <select class="form-control" name="kecamatan" id="kecamatan">
                                        <option value="<?= $detail->kecamatan ?>"><?=  $detail->kecamatan ?></option>
                                            <?php foreach ($kecamatan as $nama_kecamatan) : ?>
                                                <option value="<?= $nama_kecamatan->kecamatan ?>"><?= $nama_kecamatan->kecamatan ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label class="col-form-label" for="inputDefault">No. HP</label>
                                            <input class="form-control text-" type="text" id="no_hp" value="<?= $detail->no_hp ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                <div class="form-group">
                                        <label for="kategori_posyandu">Posyandu</label>
                                        <select class="form-control" name="posyandu" id="posyandu">
                                        <option value="<?= $detail->posyandu ?>"><?=  $detail->posyandu ?></option>
                                            <?php foreach ($posyandu as $nama_posyandu) : ?>
                                                <option value="<?= $nama_posyandu->nama_posyandu ?>"><?= $nama_posyandu->nama_posyandu ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                         
                            <div class="row pl-3">
                                <div class="col-5">
                                    <div class="form-group">
                                        <button type="bunnton" class="btn btn-primary" onclick="TambahRiwayat();">Simpan</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>
    <?php $this->load->view('dashboard/_partials/js') ?>
</body>
<script type="text/javascript">

    //Tambah Data Riwayat Imunisasi
    function TambahRiwayat() {
        var id_balita = $("#id_balita").val();
        var nama_balita = $("#nama_balita").val();
        var nama_ibu = $("#nama_ibu").val();
        var nama_ayah = $("#nama_ayah").val();
        var jenis_kelamin = $("#jenis_kelamin").val();
        var tempat_lahir = $("#tempat_lahir").val();
        var tanggal_lahir = $("#tanggal_lahir").val();
        var alamat = $("#alamat").val();
        var kecamatan = $("#kecamatan").val();
        var no_hp = $("#no_hp").val();
        var posyandu = $("#posyandu").val();
        if (id_balita.length == 0) {
            swal({
                title: "Perhatian!",
                text: "Pilih data balita terlebih dahulu !",
                icon: "warning",
                button: false,
                timer: 1500,
            });
    
        } else {
            $.ajax({
                type: 'POST',
                url: domain + "proses/simpan_edit_balita",
                data: {
                    id_balita: id_balita,
                    nama_balita: nama_balita,
                    nama_ibu: nama_ibu,
                    nama_ayah: nama_ayah,
                    jenis_kelamin: jenis_kelamin,
                    tempat_lahir: tempat_lahir,
                    tanggal_lahir: tanggal_lahir,
                    alamat: alamat,
                    kecamatan: kecamatan,
                    no_hp: no_hp,
                    posyandu: posyandu
                },
                success: function(result) {
                    d = JSON.parse(result);
                    swal({
                        text: d.message,
                        icon: d.type,
                        button: false,
                        timer: 1500,
                    });
                }

            });
        }
    }
</script>

</html>