<!DOCTYPE html>
<html>

<head>
    <title>Sertifikat Imunisasi</title>
    <style>
        * {
            padding: 0%;
            margin: 0%;
        }

        body {
            /* background-image: url("<?= base_url() ?>assets/images/karawang.png"); */
            background-repeat: repeat;
            background-position: center;
            background-size: 50px;
            opacity: 0.2;
            color: #000;
        }

        .kab {
            padding-top: 5%;
            padding-left: 20%;
        }

        .title {
            padding-top: 5%;
        }

        .puskesmas {
            padding-top: 5%;
            padding-left: 75%;
        }

        .logo {
            transform: translateY(-200%);
            text-align: center;
        }

        /* head */
        .head {
            display: flex;
            justify-content: space-around;

        }

        .head .title {
            margin-top: 1%;
            text-transform: uppercase;
        }

        .head img {
            width: 70px;
        }

        .head .title {
            text-align: center;
        }

        /* body-content */
        .body-content .logo img {
            width: 100px;

        }

        .curved-text {
            position: fixed;
            top: 320px;
            letter-spacing: 5px;
            font-weight: bold;
            text-align: center;
            font-size: 55px;
            color: green;
            text-transform: uppercase;
            transform: translateX(23%);
        }

        .s1 {
            transform: translate(10px, 60px) rotate(-30deg);
        }

        .e1 {
            transform: translate(5px, 30px) rotate(-25deg);
        }

        .r1 {
            transform: translate(6px, 5px) rotate(-20deg);
        }

        .t1 {
            transform: translate(3px, -15px) rotate(-15deg);
        }

        .i1 {
            transform: translate(2px, -25px) rotate(-10deg);
        }

        .f {
            transform: translate(1px, -27px) rotate(0deg);
        }

        .i2 {
            transform: translate(1px, -18px) rotate(10deg);
        }

        .k {
            transform: translate(3px, 1px) rotate(20deg);
        }

        .a {
            transform: translate(3px, 30px) rotate(25deg);
        }

        .t2 {
            transform: translate(-3px, 60px) rotate(30deg);
        }

        .e4 {
            transform: translate(-6px, 40px) rotate(20deg);
        }

        .k2 {
            transform: translate(-14px, 60px) rotate(25deg);
        }

        .s2 {
            transform: translate(-20px, 80px) rotate(30deg);
        }

        /* An inline-block element is placed as an inline 
         element (on the same line as adjacent content),  
         but it behaves like a block element  */

        span {
            display: inline-block;
        }

        .body-text {

            transform: translateY(-55%);
            text-align: center;
            font-size: 20px;
        }

        .body-text .for {
            margin-top: 1%;
        }

        .body-text .hr-name {
            margin-top: 4%;
            display: flex;
            justify-content: center;
            font-weight: bold;

        }

        .date {
            padding-left: 70%;
            display: inline;

        }

        .date hr {
            padding-left: 70%;
            display: inline-block;
            width: 10px;
            border: none;
            border-bottom: 2px dotted;
        }

        .giver-name {
            position: fixed;
            top: 660px;
            padding-left: 70%;
        }
    </style>
</head>

<body>
    <div class="content" style="opacity: 3;">
        <div class="head">
            <div class="kab">
                <img src="<?= base_url() ?>assets/images/karawang.png" alt="">
            </div>
            <div class="title">
                <h2>PEMERINTAH KABUPATEN KARAWANG</h2>
                <h2>UPTD PUSKESMAS DTP KOTABARU</h2>
            </div>
            <div class="puskesmas">
                <img src="<?= base_url() ?>assets/images/puskesmas.png" alt="">
            </div>
        </div>
        <div class="logo" style="opacity: 3;">
            <img src="<?= base_url() ?>assets/images/imunisasi.png" height="100px" alt="">
        </div>

        <div class="curved-text" style="opacity: 3;">
            <!-- Declare all the characters of text  
        one-by-one, inside span tags -->
            <span class="s1">S</span>
            <span class="e1">E</span>
            <span class="r1">R</span>
            <span class="t1">T</span>
            <span class="i1">I</span>
            <span class="f">F</span>
            <span class="i2">I</span>
            <span class="k">K</span>
            <span class="a">A</span>
            <span class="t2">T</span>
        </div>

        <div class="body-text" style="opacity: 3;">
            <div class="title">
                <h2>IMUNISASI</h2>
                <p class="for">diberikan kepada :</p>
                <div class="hr-name">
                    <u><?= strtoupper($balita->nama_balita) ?></u>
                </div>
                <br>
                <p class="receive">Yang Telah Menerima Seluruh Imunisasi Dasar Lengkap</p>
                <br>
                <p class="giver-name">
                    Cikampek, <?= date("d ") . date("F") . date(" Y") ?><br>
                    yang memberikan imunisasi :
                    <br><br><br><br>
                    ( <?= $user->nama_lengkap ?> )
                    <br>
                    NIP : 1231111111
                </p>


            </div>


        </div>

    </div>

</body>

</html>