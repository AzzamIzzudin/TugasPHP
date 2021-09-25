<?php
    $nama_depan = "Azzam ";
    $nama_tengah = "Izzudin ";
    $nama_belakang = "Hasan";
    $nama_lengkap = $nama_depan.$nama_tengah.$nama_belakang;

    $kota = "Tebing Tinggi";
    $tanggal = " 15 ";
    $bulan = "Juni ";
    $tahun = "2002";
    $TTL = $kota.",".$tanggal.$bulan.$tahun;

    $nama_jalan = "Jl.Manyar 1 No.32, ";
    $kelurahan = "Manyar Sabrangan, ";
    $kecamatan = "Mulyorejo, ";
    $kota = "Kota Surabaya, ";
    $kode_pos = "60116";
    $alamat = $nama_jalan.$kelurahan.$kecamatan.$kota.$kode_pos;

    $status_menikah = False;
    if($status_menikah === False){
        $status_menikah = "Belum";
    }else{
        $status_menikah = "Sudah";
    }

    $kabisat = null;
    if(($tahun % 4 === 0) && ($tahun % 100 !== 0) || ($tahun % 400 === 400)){
        $kabisat = "Kabisat";
    }else{
        $kabisat = "Tidak Kabisat";
    };

    $s1 = 3.9;
    $s2 = 3.5;
    $s3 = 3.0;
    $s4 = 3.1;
    $s5 = 2.8;
    $s6 = 3.3;
    $s7 = 3.5;
    $s8 = 3.0;
    $ipk = ($s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8)/8;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?= "Tugas 1 PHP"?>
    </title>
    <style>
        div{
            margin-left: auto;
            margin-right: auto;
            background-color: beige;
            width: 500px;
            height: auto;
            font-family:Arial, Helvetica, sans-serif;
            text-align: center;
            padding: 20px;
            border: 3px solid grey;
            border-radius: 10px;
        }
        h1{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
    </style>
</head>
<body style="font-family:'Arial'">
    <div>
        <h1>
            <?= $nama_lengkap?>
        </h1>
        <h4>
            <?= $TTL?>
        </h4>
        <p>
            <?= $alamat?>
        </p>
        <p>
            <?= "Status Menikah = ".$status_menikah ?>
        </p>
        <p>
            <?= "Kabisat = ".$kabisat ?>
        </p>
        <p>
            <?= "Total IPK = ".$ipk ?>
        </p>
    </div>
</body>
</html>