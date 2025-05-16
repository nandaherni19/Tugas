<?php
require_once('kelas/akunBank.php');

$data1 = new akunBank("001", 10000);
$data1->setNama("Nanda");
$data1->tambahUang(5000);
$data1->kurangUang(2000);
echo "Akun: " . $data1->getNama() . "<br>";
$data1->tampilkanUang();
$data1->hitungPajak();

echo "<hr>";

$data2 = new akunBank("002", 20000);
$data2->setNama("Tiara");
$data2->tambahUang(3000);
$data2->kurangUang(1000);
echo "Akun: " . $data2->getNama() . "<br>";
$data2->tampilkanUang();
$data2->hitungPajak();
?>