<?php

$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$tugas = $_GET['tugas'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$total_nilai = ($tugas + $uas + $uts) / 3;

if($total_nilai > 75){
    $keterangan = "Lulus";
}
else {
    $keterangan = "Gagal";
}

?>