<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        * {
            margin: 1;
            padding: 0;
        }

        body {
            font-family: arial narrow;
        }

        .container {

            text-transform: uppercase;
        }


        .left {
            /* margin-top: 2% !important; */
            position: absolute;
            margin-left: 25px;
        }

        .center {
            position: absolute;
            /* margin-top: 2% !important; */
            margin-left: 43%;
        }

        .right {
            position: absolute;
            /* margin-top: 2% !important; */
            margin-left: 92%;
        }

        .list {
            margin-left: 25px;
        }
    </style>

    <h1 align="center" style="margin-top:20px;">REGISTER IMUNISASI BAYI DAN BADUTA</h1>
    <br><br><br><br><br>
    <div class="container ">

        <p class="left">

            Nama Posyandu : <?= urldecode($this->uri->segment(3)) ?><br>
            
        </p>

        <p class="center">


            Kota/Kab : Jakarta Barat
        </p>

        <p class="right">

            Bulan : <?php $bt = urldecode($this->uri->segment(4));
                    $pisah = explode("-", $bt);
                    $bulan = $pisah[1];
                    $namabulan = date("F", mktime(0, 0, 0, $bulan, 10));
                    echo $namabulan ?><br>
            Tahun : <?php $bt = urldecode($this->uri->segment(4));
                    $pisah = explode("-", $bt);
                    echo $pisah[0]; ?>
        </p>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

    <table class="list" border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th rowspan="2" style="width: 60px;">NO</th>
                <th rowspan="2" style="width: 15%;">NAMA BAYI/BADUTA</th>
                <th colspan="2" style="width: 1%;">JENIS KELAMIN</th>
                <th rowspan="2" style="width: 100px;">TANGGAL LAHIR</th>
                <th rowspan="2" style="width: 100px;">NAMA ORANG TUA</th>
                <th rowspan="2" style="width: 100px;">ALAMAT RT/RW</th>
                <th colspan="18">JENIS IMUNISASI</th>
            </tr>
            <tr>
                <th style="width: 40px;">L</th>
                <th style="width: 40px">P</th>
                <th style="width: 100px;">HB 0 <24 JAM </th>
                <th style="width: 100px;">&nbsp;HB 0 &nbsp; 1-7 HARI </th>
                <th style="width: 100px;">BCG</th>
                <th style="width: 100px;">OPV 1</th>
                <th style="width: 100px;">DPT-HB-Hib 1</th>
                <th style="width: 100px;">OPV 2</th>
                <th style="width: 100px;">PCV 1</th>
                <th style="width: 100px;">DPT-HB-Hib 2</th>
                <th style="width: 100px;">OPV 3</th>
                <th style="width: 100px;">PCV 2</th>
                <th style="width: 100px;">DPT-HB-Hib 3</th>
                <th style="width: 100px;">OPV 4</th>
                <th style="width: 100px;">IPV</th>
                <th style="width: 100px;">CAMPAK/MR 1</th>
                <th style="width: 100px;">IDL</th>
                <th style="width: 100px;">PCV 3</th>
                <th style="width: 100px;">DPT-HB-Hib 4</th>
                <th style="width: 100px;">MR 2</th>
            </tr>
        </thead>

        <tbody align="center">
            <?php $no = 1;
            foreach ($data as $details) : ?>
                <tr>
                    <td height="50px"><?= $no++ ?></td>
                    <td><?= $details->nama_balita ?></td>
                    <td><?php if ($details->jenis_kelamin == "Laki-Laki") {
                            echo "L";
                        } else {
                            echo "-";
                        } ?></td>
                    <td><?php if ($details->jenis_kelamin == "Perempuan") {
                            echo "P";
                        } else {
                            echo "-";
                        } ?></td>
                    <td><?php $date = date_create($details->tanggal_lahir);
                        echo date_format($date, "d/m/y"); ?></td>
                    <td><?= $details->nama_ibu ?> - <?= $details->nama_ayah ?></td>
                    <td>-</td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "HB 0 < 24 JAM");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "HB 0 1-7 HARI");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "BCG");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "OPV 1");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "DPT-HB-Hib 1");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "OPV 2");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "PCV 1");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "DPT-HB-Hib 2");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "OPV 3");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "PCV 2");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "DPT-HB-Hib 3");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "OPV 4");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "IPV");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "CAMPAK/MR 1");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "IDL");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "PCV 3");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "DPT-HB-Hib 4");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                    <td><?php
                        $vaksin = $this->dashboard_model->get_jenis_imunisasi_byID($details->id_balita, "MR2");
                        if (!$vaksin) {
                            echo "-";
                        } else {
                            $tgl = date_create($vaksin->tanggal_vaksin);
                            echo date_format($date, "d/m/y");
                        }
                        ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>