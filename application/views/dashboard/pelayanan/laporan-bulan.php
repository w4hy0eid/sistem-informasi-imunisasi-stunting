<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Bulanan Imunisasi</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: arial narrow;
            margin-top: 50px;
            margin-left: 90px;
            margin-right: 20px;
        }

        h2.title {
            text-align: center;
            padding-top: 2%;
        }

        table.data-head {
            margin-left: 10px;
            margin-top: 10px;
        }

        table.data-head tr td {
            font-weight: bold;
            text-align: left;
        }

        .data {
            width: 150px;
        }

        .dot {
            width: 10px;
        }

        /* Laporan */

        table.laporan {
            margin: 15px 10px 0px 10px;
        }

        table.laporan tr th {
            text-align: center;
        }

        table tr .th-laporan-target span {
            padding-left: 1px;
            font-size: 11px;
            width: 50px;

        }

        .target {
            padding-left: 1px;
            font-size: 11px;
            width: 50px;
        }

        .th-laporan-target {
            border-style: solid;
            border-right-color: rgb(0, 0, 0);
            border-right-style: double;
            border-right-width: 4px;
        }

        table tr .th-laporan {
            width: 200px;
            padding-top: 3px;
            font-size: 20px;
        }

        table.laporan tr .th-child {
            width: 150px;
            padding-top: 3px;
            font-size: 14px;
        }

        table.laporan tr.th-child2 {
            padding-top: 3px;
            font-size: 14px;
        }

        /* tbody */
        tbody {
            text-align: center;
        }

        tr.total td {
            font-weight: bold;
            font-size: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
            letter-spacing: 5px;
        }

        tr.data-laporan td {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .kotak-kanan {
            position: fixed;
            left: 94%;
            top: 10%;
            border-style: solid;
            padding: 5px 15px -2px 25px;
            font-size: 25px;
            font-weight: bold;
            width: 25px;
            height: 35px;
        }
    </style>


    <h2 class="title">Laporan Bulanan Imunisasi 2021</h2>

    <table class="data-head">
        <tr>
            <td class="data">KABUPATEN</td>
            <td class="dot">:</td>
            <td>KARAWANG</td>
            <p class="kotak-kanan">1</p>
        </tr>
        <tr>
            <td class="data">PUSKESMAS</td>
            <td class="dot">:</td>
            <td>KOTA BARU</td>
        </tr>
        <tr>
            <td class="data">KECAMATAN</td>
            <td class="dot">:</td>
            <td>KOTA BARU</td>
        </tr>
        <tr>
            <td class="data">DESA</td>
            <td class="dot">:</td>
            <td>PANGULAH BARU</td>
        </tr>
        <tr>
            <td class="data">BULAN</td>
            <td class="dot">:</td>
            <td>JANUARI, 2021</td>
        </tr>
    </table>

    <table class="laporan" border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th rowspan=" 3">NO</th>
                <th rowspan="3" style="width: 8%;">POSYANDU</th>
                <th rowspan="3" style="width: 5%;" class="th-laporan-target">SASARAN BAYI</th>
                <!-- HBO -->
                <th colspan="5" class="th-laporan"> HBO (0-7 HARI)</th>
                <th colspan="2" class="th-laporan-target" style="text-align: left;"><span>TARGET :</span></th>
                <!-- BCG -->
                <th colspan="5" class="th-laporan"> BCG</th>
                <th colspan="2" class="th-laporan-target" style="text-align: left;"><span>TARGET :</span></th>
                <!-- POLIO 1 -->
                <th colspan="5" class="th-laporan"> POLIO 1</th>
                <th colspan="2" class="th-laporan-target" style="text-align: left;"><span>TARGET :</span></th>
                <!-- POLIO 2 -->
                <th colspan="5" class="th-laporan"> POLIO 2</th>
                <th colspan="2" class="th-laporan-target" style="text-align: left;"><span>TARGET :</span></th>
                <!-- POLIO 3 -->
                <th colspan="5" class="th-laporan"> POLIO 3</th>
                <th colspan="2" class="target" style="text-align: left;"><span>TARGET :</span></th>
            </tr>
            <tr>
                <!-- HBO -->
                <th colspan="3" class="th-child">BULAN INI</th>
                <th colspan="4" class="th-child th-laporan-target">KUMULATIF</th>
                <!-- BCG -->
                <th colspan="3" class="th-child">BULAN INI</th>
                <th colspan="4" class="th-child th-laporan-target">KUMULATIF</th>
                <!-- POLIO 1 -->
                <th colspan="3" class="th-child">BULAN INI</th>
                <th colspan="4" class="th-child th-laporan-target">KUMULATIF</th>
                <!-- POLIO 2 -->
                <th colspan="3" class="th-child">BULAN INI</th>
                <th colspan="4" class="th-child th-laporan-target">KUMULATIF</th>
                <!-- POLIO 3 -->
                <th colspan="3" class="th-child">BULAN INI</th>
                <th colspan="4" class="th-child">KUMULATIF</th>
            </tr>
            <tr class="th-child2">
                <!-- HBO -->
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th class="th-laporan-target">%</th>
                <!-- BCG -->
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th class="th-laporan-target">%</th>
                <!-- POLIO 1 -->
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th class="th-laporan-target">%</th>
                <!-- POLIO 2 -->
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th class="th-laporan-target">%</th>
                <!-- POLIO 3 -->
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th>L</th>
                <th>P</th>
                <th>TOTAL</th>
                <th>%</th>
            </tr>
        </thead>

        <tbody>
            <tr class="data-laporan">
                <td>1</td>
                <td>PUSPA INDAH 1</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="data-laporan">
                <td>2</td>
                <td>PUSPA INDAH 2</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="data-laporan">
                <td>3</td>
                <td>PUSPA INDAH 3</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="data-laporan">
                <td>4</td>
                <td>PUSPA INDAH 4</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="data-laporan">
                <td>5</td>
                <td>PUSPA INDAH 5</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="data-laporan">
                <td>6</td>
                <td>PUSPA INDAH 6</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="data-laporan">
                <td>7</td>
                <td>PUSPA INDAH 7</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="data-laporan">
                <td>8</td>
                <td>PUSPA INDAH 8</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="data-laporan">
                <td>9</td>
                <td>PUSKESMAS</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="data-laporan">
                <td>10</td>
                <td>SWASTA</td>
                <td class="th-laporan-target"></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td class="th-laporan-target">7</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
            </tr>
            <tr class="total">
                <td colspan="2">TOTAL</td>
                <td class="th-laporan-target"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="th-laporan-target"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="th-laporan-target"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="th-laporan-target"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="th-laporan-target"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>