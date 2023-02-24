<?php

$mahasiswa1 = [
    'id'=>1,
    'NIM'=>01102220,
    'uts'=>90,
    'uas'=>85,
    'tugas'=>95,


];
$mahasiswa2 = [
    'id'=>2,
    'NIM'=>01102456,
    'uts'=>85,
    'uas'=>90,
    'tugas'=>95,


];
$mahasiswa3 = [
    'id'=>3,
    'NIM'=>01105137,
    'uts'=>85,
    'uas'=>95,
    'tugas'=>90,


];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Nilai Mahasiswa</h2>
        <table class="table table-sripped">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php
                foreach($ar_nilai as $nilai){
            ?>
            <tr>
                <td><?= $nilai ['id']?></td>
                <td><?php echo $nilai ['NIM'] ?></td>
                <td><?= $nilai ['uts'] ?></td>
                <td><?= $nilai ['uas'] ?></td>
                <td><?= $nilai ['tugas'] ?></td>
            </tr>
                <?php } ?>
        </table>
    </div>
</body>
</html>