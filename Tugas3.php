<?php

// Definisi Variabel
$arr_nilai = [89,70,60,80,85,90,93,67,78,90,91,84,80,90,88];
$nilai_akhir = NULL;
$counter = 0;
$desc_nilai = NULL;

// Definisi Function
function get_total_nilai($nilai,$total){
    foreach($nilai as $satuan){
        $total += $satuan;
    }
    return $total;
}

function get_rata_rata ($nilai,$jumlah){
    $nilai /= $jumlah;
    return $nilai;
}

function get_nilai_conv($nilai){
    $nilai /= 25;
    return $nilai;
}

function get_desc_nilai ($nilai){
    if($nilai >= 80){
        $desc_nilai = "A";
    }elseif ($nilai >= 70) {
        $desc_nilai = "B";
    }elseif ($nilai >= 60) {
        $desc_nilai = "C";
    }elseif ($nilai >= 50) {
        $desc_nilai = "D";
    }else {
        $desc_nilai = "E";
    }
    return $desc_nilai;
}

function get_status($desc_nilai){
    if($desc_nilai === "A" || $desc_nilai === "B" || $desc_nilai === "C"){
        echo "Lulus";
    }else{
        echo "Tidak Lulus";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas 3 ProgClass</title>
    <style>
        table{
            width : 8%;
        }
        th, td{
            border: 1px solid black;
            text-align : center;
        }   
    </style>
</head>
<body>
    <h4>Nilai Budi</h4>

    <table style="border:1px solid black";>
        <tr>
            <th>No.</th>
            <th>Nilai</th>
        </tr>
        <?php foreach ($arr_nilai as $index => $nilai ) { ?>
            <tr>
                <td><?= $index+1 ?></td>
                <td><?= $nilai ?></td>
            </tr>
        <?php } ?>
    </table>

    <p>Total Nilai = <?= $nilai_akhir = get_total_nilai($arr_nilai,$nilai_akhir); ?></p>

    <p>Rata-Rata = <?= $nilai_akhir = get_rata_rata($nilai_akhir,count($arr_nilai))?></p>

    <p>Nilai Akhir (Skala 4) = <?= get_nilai_conv($nilai_akhir);?></p>

    <p>Deskripsi Nilai = <?= $desc_nilai = get_desc_nilai($nilai_akhir); ?></p>
    
    <p>Status Kelulusan = <?= get_status($desc_nilai);?></p>

</body>
</html>