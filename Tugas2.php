<?php
    // Deklarasi Array kedalam variabel Hari dan Bulan
    $hari = ["senin","selasa","rabu","kamis","jumat","sabtu","minggu"];
    $bulan = ["januari",'februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember'];

    // Menghitung panjang Array pada variabel Bulan
    $jumlah = count($bulan);

    // Deklarasi Umur
    $umur = 19;

    //Deklarasi Hasil ($jumlah x $umur)
    $hasil = $jumlah * $umur;
    $hasil_akhir = NULL;

    // Deklarasi If Statement
    if($hasil%2 === 0){
        $hasil_akhir = $hasil." Merupakan Angka Genap"; 
    }elseif($hasil%2 !== 0){
        $hasil_akhir = $hasil." Merupakan Angka Ganjil";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?= var_dump($hari);?>
    </p>
    <p>
        <?= var_dump($bulan);?>
    </p>
    <p>
        <?= "Jumlah bulan = ".$jumlah?>
    </p>
    <p>
        <?= $hasil_akhir?>
    </p>
</body>
</html>