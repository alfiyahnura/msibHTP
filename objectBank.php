<?php
require 'Bank.php';
//ciptakan object

$n1 = new Bank('001','Siti',30000000);
$n2 = new Bank('002','Fatimah',40000000);
$n3 = new Bank('003','Zahro',50000000);
$n4 = new Bank('004','Ali',60000000);
$n5 = new Bank('005','Tholib',70000000);

$n1->ambil(20000000);
$n2->setor(30000000);
$dataNasabah = array($n1,$n2,$n3,$n4,$n5);
foreach ($dataNasabah as $data){
    $data->cetak();
}
?>