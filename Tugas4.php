<?php

function perhitunganSederhana($angkatan, $semester){

    $hasil = $angkatan * $semester;

    if($hasil % 3 === 0){
        return "Habis Dibagi Tiga";
    }else {
        return "Tidak Habis Dibagi Tiga";
    }
};

$angkatan = 2020;
$semester = 3;

echo perhitunganSederhana($angkatan,$semester);
?>