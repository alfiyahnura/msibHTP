<?php

echo 'Hallo World';

//ini pemanggilan di PHP

//belajar variable
$namaSiswa = "Alfiyah";
$umur = 25;
$berat_badan = "75.5";
$_pekerjaan = "mahasiswa";
$tes = "coba";
echo '<hr>';
echo 'Nama Siswa : '.$namaSiswa;
echo '<br> Umur : '.$umur;
echo '<br> Berat Badan : '.$berat_badan;
echo '<br> Pekerjaan : '.$_pekerjaan;
?>

<hr>
Nama Siswa : <?= $namaSiswa ?>
<br> Umur : <?= $umur ?>
<br> Berat Badan : <?= $berat_badan ?>
<br> Pekerjaan : <?= $_pekerjaan ?>