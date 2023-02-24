<?php 

// shortcut buat komen pake ctr+/ taro di baris yang pengen dibuat jadi komentar
// ini sebuah komentar
# sama aja beda simbol
/* ini komentar untuk yang lebih panjang
    bisa untuk beberapa baris */

echo "Hello world <br> ";
echo 'Hello world <br> ';
print_r('Muhammad Fatih <br>');
var_dump('STT Nurul Fikri');
echo "<hr>";

$nama = "Muhammad Fatih";
$umur = 19;
$berat = 80;
$mahasiswa = true;

echo "Nama Saya $nama <br> ";
echo "Umur saya sekkarang adalah $umur tahun <br>";
echo "Berat saya $berat Kg <br> ";
echo "<hr> ";

// Buat Array 
$programs = ["PHP", "Javascript", "Html", "CSS"];
// echo $programs[0];
foreach ($programs as $programs){
    echo $programs;
}

?>