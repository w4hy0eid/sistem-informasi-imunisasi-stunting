<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('dashboard/_partials/css') ?>
    <style>
        main {
        background-image: url('<?= base_url() ?>assets/images/bg.jpeg');
        background-repeat: no-repeat;
        background-color:#2596be;
        }
</style>
<!-- 
background="<?= base_url() ?>assets/images/bg.jpeg" -->
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <?php $this->load->view('dashboard/_partials/navbar') ?>
    <!-- load navbar disini-->

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php $this->load->view('dashboard/_partials/sidebar') ?>
    <!-- Load sidebar disini -->

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-home"></i> Dashboard</h1>
                <!-- <p>Start a beautiful journey here</p> -->
            </div>
             <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            </ul>
        </div>
        <!--
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                    <div class="info">
                        <h4>TOTAL BALITA</h4>
                        <p><b><?= $TotalBalita ?></b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small danger coloured-icon"><i class="icon fa fa-hospital-o fa-3x"></i>
                    <div class="info">
                        <h4>TOTAL POSYANDU</h4>
                        <p><b><?= $TotalPosyandu ?></b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small info coloured-icon"><i class="icon fa fa-medkit fa-3x"></i>
                    <div class="info">
                        <h4>TOTAL IMUNISASI <?= date("Y") ?></h4>
                        <p><b><?= $TotalImunisasi ?></b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-small warning coloured-icon"><i class="icon fa fa-check fa-3x"></i>
                    <div class="info">
                        <h4>SUDAH IMUNISASI LENGKAP</h4>
                        <p><b><?= $TotalImunisasiLengkap ?></b></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Grafik Imunisasi <?= date("Y") ?></h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                    </div>
                </div>
            </div>
            -->

            <div class="row" >
            <div class="col-md-6 col-sm-3 ml-auto">
                <div class="tile">                  
                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    <script src="<?= base_url() ?>assets/js/canvasjs.min.js"></script>
                    </div>
                </div>
            </div>
            </div>
            
          
 <!-- 
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Data Imunisasi Terbaru (<?= date("d/m/Y") ?>)</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Balita</th>
                                <th>Nama Ibu</th>
                                <th>Jenis Kelamin</th>
                                <th>Jenis Imunisasi</th>
                                <th>Posyandu</th>
                                <th>Tanggal</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($ImunisasiTerbaru as $terbaru) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $terbaru->nama_balita ?></td>
                                    <td><?= $terbaru->nama_ibu ?></td>
                                    <td><?= $terbaru->jenis_kelamin ?></td>
                                    <td><?= $terbaru->nama_vaksin ?></td>
                                    <td><?= $terbaru->posyandu ?></td>
                                    <td><?= $terbaru->tanggal_vaksin ?></td>
                                    <td><a href="<?= base_url() ?>details/<?= $terbaru->id_balita ?>" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a></td>
                                </tr>
                            <?php endforeach ?>
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div> -->
        </div>
    </main>

    <!-- Essential javascripts for application to work-->

    <!-- Load js disini -->
    <?php $this->load->view('dashboard/_partials/js') ?>

    <script src="<?= base_url() ?>assets/js/plugins/chart.js"></script>

    <script>
window.onload = function() {


var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Data Stunting Gizi Anak di Kota Jakarta Barat"
	},
	data: [{
		type: "pie",
		// startAngle: 240,
		yValueFormatString: "##0",
		indexLabel: "{label} {y}",
		dataPoints: [
			{y: <?=$cengkareng;?>, label: "Cengkareng"},
			{y: <?=$grogol;?>, label: "Grogol Petamburan"},
			{y: <?=$taman;?>, label: "Taman Sari"},
			{y: <?=$tambora;?>, label: "Tambora"},
			{y: <?=$kebon;?>, label: "Kebon Jeruk"},
            {y: <?=$kalideres;?>, label: "Kalideres"},
            {y: <?=$palmerah;?>, label: "Palmerah"},
            {y: <?=$kembangan;?>, label: "Kembangan"}
		]
	}]
});
chart.render();

}
</script>

</body>

</html>