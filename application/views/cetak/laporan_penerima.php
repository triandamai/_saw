<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tabel.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Willy" />
    <style>
        body,
        h2 {
            font-family: "Courier new";
        }

        h2,
        h3 {
            margin-bottom: 5px;
            margin-top: 0px;
        }

        .garis {
            height: 2px;
            background-color: #000;
            margin-bottom: 0px;
            margin-top: 10px;
        }

        hr {
            height: 0.5px;
            background-color: #000;
            margin-top: 5px;
        }

        p {
            margin: 0 0 0 0;
            padding: 0 0 0 0;
        }

        .left {
            text-align: left
        }

        .right {
            text-align: right
        }

        .center {
            text-align: center
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            grid-gap: 10px;
            padding: 10px;
            align: center;
        }

        .grid-container>div {
            text-align: center;
            padding: 20px 0;
        }

        .item1 {
            grid-row: 1 / span 2;
        }

        .container {
            /* padding-left: 30px; */
            /* padding-right: 30px; */
        }
    </style>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/jquery-3.2.1.min.js"></script>

</head>

<body style="font-family: 'Courier';">
    <div class="container">
        <img src="<?= base_url(); ?>assets/img/brebes_logo.png" alt="Flowers in Chania"
            style="width:100px;height:100px; margin-left : 0px;float : left"></img>

        <h2 align="center" style="font-family: 'Courier';">PEMERINTAH KABUPATEN BREBES</h2>
        <h2 align="center" style="font-family: 'Courier';">DESA LAREN KECAMATAN BUMIAYU</h2>
        <h3 align="center" style="font-family: 'Courier';">Jalan Jendral Soedirman Km 01 Desa Laren
            Kecamatan Bumiayu Kabupaten Brebes</h3>
        <!-- <h3 align="center">LAPORAN PER <?= strtoupper(date('M Y')); ?></h3> -->
        <hr class="garis" />
        <!-- <hr/> -->
    </div>


    <div class="left" align='left' style="margin-top: 20px;">
        <p><?php echo $tgl; ?></p>
        <p align="center" style="font-family: 'Courier';font-size: 20px">LAPORAN PENERIMA BANTUAN</p>
        <p align="center" style="font-family: 'Courier';font-size: 20px">PROGRAM BEDAH KEMISKINAN RAKYAT SEJAHTERA</p>
    </div>

    <table class="table table-striped">
        <thead>
            <th scope="col">RANK</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama Kepala Keluarga</th>
            <th scope="col">Penghasilan Orang Tua</th>
            <th scope="col">Jumlah Tanggungan</th>
            <th scope="col">Luas Lahan (m2)</th>
            <th scope="col">Jenis Lantai</th>
        </thead>
        <?php
            $no = 1;
            $i = 0;
            foreach ($hasilAkhir as $HAkey => $HAvalue) {
        ?>
        <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $datPen[$HAkey]['nik']?></td>
            <td><?php echo $datPen[$HAkey]['nama']; ?></td>
            <?php $index = 0; foreach($kriteria as $k){ ?>
			    <td><?= $dataNilaiPendudukXXX["nik-".$datPen[$HAkey]['nik']][$index]["namaSubkategori"]; ?>
				</td>
			<?php $index++; } ?>
        </tr>
        <?php
            $i++;
            $no++;
        }
        ?>
    </table>
    <div class="right" align='right' style="margin-top: 20px;">
        <p>Kasi Pemerintahan</p>
        <br>
        <br>
        <br>
        <br>
        <p>Nispatul Ummayah</p>
    </div>
    </div>
</body>

</html>
<script>
    $('table').each(function () {
        $(this).find('thead').find('th').addClass('center');
    });
</script>