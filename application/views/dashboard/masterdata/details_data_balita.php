<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $detail->nama_balita ?> - Detail</title>
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
                <h1><i class="fa fa-laptop"></i> Data Details Balita</h1>
                <p>Details Balita</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 ">
                 <div class="col-md-12 informasi pelayanan ">
                        <div class="card ">
                          
                           
                        </div>
                    </div>
                    <!--  -->
                <div class="row">
                <div class="col-md-12 informasi pelayanan ">
                        <div class="card ">
                            <div class="title pt-3">
                                <h4 class="text-primary text-center">Grafik IMT</h4>
                            </div>

                            <canvas id="speedChart" width="650" height="200"></canvas>   
                        </div>
                    </div>
                    <div class="col-md-4 profile">
                        <div class="card ">
                            <div class="title pt-3">
                                <h4 class="text-primary text-center">Biodata Balita</h4>

                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" id="id_balita">
                                            <label class="col-form-label" for="inputDefault">Nama</label>
                                            <input readonly class="form-control" type="text" id="nama_lengkap" value="<?= $detail->nama_balita ?>" placeholder="Nama Anak">
                                        </div>
                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label for="" class="col-form-label" for="inputDefault">Jenis
                                                Kelamin</label>
                                            <input readonly class="form-control" type="text" id="jenis_kelamin" value="<?= $detail->jenis_kelamin ?>" placeholder="Jenis Kelamin">
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
                                                    <input readonly class="form-control" type="text" id="tempat_lahir" value="<?= $detail->tempat_lahir ?>" placeholder="Tempat Lahir">
                                                </div>
                                            </div>
                                            <div class="col-5 pl-0">
                                                <label class="col-form-label" for="inputDefault">Tanggal
                                                    Lahir</label>
                                                <div class="form-group">
                                                    <input readonly class="form-control" id="tanggal_lahir" value="<?= $detail->tanggal_lahir ?>" type="date">
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
                                                    <input readonly class="form-control" type="text" id="nama_ibu" value="<?= $detail->nama_ibu ?>" placeholder="Nama Ibu">
                                                </div>
                                            </div>
                                            <div class="col-5 pl-0">
                                                <label class="col-form-label" for="inputDefault">Nama Ayah</label>
                                                <div class="form-group">
                                                    <input readonly class="form-control" type="text" id="nama_ayah" value="<?= $detail->nama_ayah ?>" placeholder="Nama Bapak">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 informasi pelayanan ">
                        <div class="card ">
                            <div class="title pt-3">
                                <h4 class="text-primary text-center">Riwayat Imunisasi</h4>
                            </div>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Usia</th>
                                        <th>Jenis Imunisasi</th>
                                        <th>Tanggal Imunisasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($riwayat as $vaksin) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $vaksin->usia_bulan ?></td>
                                            <td><?= $vaksin->nama_vaksin ?></td>
                                            <td><?= $vaksin->tanggal_vaksin ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4 informasi pelayanan ">
                        <div class="card ">
                            <div class="title pt-3">
                                <h4 class="text-primary text-center">Riwayat Timbang</h4>
                            </div>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Usia</th>
                                        <th>Berat Badan</th>
                                        <th>Status</th>
                                        <th>Saran</th>
                                        <th>Tanggal Timbang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($r_timbang as $vaksin) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $vaksin->usia_timbang ?></td>
                                            <td><?= $vaksin->berat_badan ?></td>
                                            <td><?= $vaksin->status ?></td>
                                            <td><?= $vaksin->saran ?></td>
                                            <td><?= $vaksin->tanggal_timbang ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
   


    </main>
    <?php $this->load->view('dashboard/_partials/js') ?>
</body>
<script type="text/javascript">
    
</script>
<script type="text/javascript">
    //hitung bulan
         var cDatal = JSON.parse('<?php echo $line; ?>');
        //chart
        var speedCanvas = document.getElementById("speedChart");
        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var dataOne = {
            label: "Gizi Buruk 3",
            data: cDatal.dataOne,
            lineTension: 0,
            fill: false,
            borderColor: 'blue'
        };

        var dataTwo = {
            label: "Gizi Buruk 2",
            data: cDatal.dataTwo,
            lineTension: 0,
            fill: false,
        borderColor: 'yellow'
        };
        var dataThree = {
            label: "Gizi Buruk 1",
            data: cDatal.dataThree,
            lineTension: 0,
            fill: false,
        borderColor: 'pink'
        };
        var dataFour = {
            label: "Normal",
            data: cDatal.dataFour,
            lineTension: 0,
            fill: false,
            borderColor: 'red'
        };

        var dataFive = {
            label: "Obes 1",
            data: cDatal.dataFive,
            lineTension: 0,
            fill: false,
        borderColor: 'black'
        };
        var dataSix = {
            label: "Obes 2",
            data: cDatal.dataSix,
            lineTension: 0,
            fill: false,
        borderColor: 'purple'
        };
        var dataSeven = {
            label: "Obes 3",
            data: cDatal.dataSeven,
            lineTension: 0,
            fill: false,
        borderColor: 'salmon'
        };

        var dataBayi = {
            label: "Berat Anak",
            data: cDatal.bayi,
            lineTension: 0,
            fill: false,
            showLine: false,
            pointRadius: 10,
            pointStyle: "rect",
        borderColor: 'green'
        };

        var speedData = {
        labels: cDatal.label,
        datasets: [dataOne,dataTwo,dataThree,dataFour,dataFive,dataSix,dataSeven,dataBayi]
        };


        var chartOptions = {
        legend: {
            display: true,
            position: 'top',
            labels: {
            boxWidth: 80,
            fontColor: 'black'
            }
        }
        };

        var lineChart = new Chart(speedCanvas, {
        type: 'line',
        data: speedData,
        options: chartOptions
        });

       
  </script>
</html>