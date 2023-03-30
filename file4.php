<?php
$nama = "Alfiyah";
$totalBelanja = 800000;
$keterangan = "";

if($totalBelanja > 100000){
    $keterangan = "Selamat $nama Anda dapat hadiah";
} else {
    $keterangan = "Terimakasih $nama sudah berbelanja";
}
?>

Nama Pelanggan : <?= $nama ?>
<br> Total Belanja : <?= $totalBelanja ?>
<br> Keterangan : <?= $keterangan ?>
