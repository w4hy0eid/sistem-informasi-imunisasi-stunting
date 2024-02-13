<!DOCTYPE html>
<html lang="en">

<head>
    <title>Master Laporan</title>
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
                <h1><i class="fa fa-laptop"></i> Master Laporan</h1>
                <p>Laporan Bulanan Posyandu</p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Laporan Bulanan Posyandu</h4>
                        <form action="<?= base_url() ?>proses/cetak_laporan_posyandu_bulan" method="post" class="forms-sample">
                            <div class="form-group">
                                <label for="kategori_posyandu">Posyandu</label>
                                <select class="form-control" name="kategori_posyandu" id="kategori_posyandu">
                                    <?php foreach ($posyandu as $nama_posyandu) : ?>
                                        <option value="<?= $nama_posyandu->nama_posyandu ?>"><?= $nama_posyandu->nama_posyandu ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Bulan</label>
                                <select class="form-control" name="bulan">
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <select class="form-control" name="tahun">
                                    <?php
                                    //Heri Priady//
                                    //28 - 01- 2018//
                                    $tg_awal = date('Y') - 5;
                                    $tgl_akhir = date('Y');
                                    for ($i = $tgl_akhir; $i >= $tg_awal; $i--) {
                                        echo "
                                        <option value='$i'";
                                        if (date('Y') == $i) {
                                            echo "selected";
                                        }
                                        echo ">$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2"><i class="mdi mdi-printer"></i> Cetak</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>



    </main>
    <?php $this->load->view('dashboard/_partials/js') ?>
</body>

</html>