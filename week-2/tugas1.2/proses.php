<?php

    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];


    if ($produk = "tv"){
        $harga = 4200000;
    }
    if ($produk = "kulkas"){
        $harga = 3100000;
    }
    if ($produk = "mesin Cuci" ){
        $harga = 3800000;
    }
    
    $total = $harga * $jumlah;

?>