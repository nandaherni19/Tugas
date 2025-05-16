<?php

require_once('kelas/Manusia.php');

// Identitas Anda
echo "Nama: Nanda Herni<br>";
echo "NIM : 243307079<br>";
echo "Kelas: TI-2c<br><br>";

$andi = new Manusia();
$andi->setNama("Andi Pratama");
$andi->setUmur(25);

$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(30);

echo "Nama Andi: " . $andi->getNama() . "<br>";
echo "Umur Andi: " . $andi->getUmur() . "<br>";
echo $andi->getNIK() . "<br><br>";

echo "Nama Budi: " . $budi->getNama() . "<br>";
echo "Umur Budi: " . $budi->getUmur() . "<br>";
echo $budi->getNIK() . "<br><br>";

$NIK = new Manusia();
echo($NIK->getNIK());
echo("<br>");

$adi = new Manusia();
$adi->setNama("Nanda Herni");
echo($adi->getNama());
echo("<br>");

$umurSaya = new Manusia();
$umurSaya->setUmur(20);
echo($umurSaya->getUmur());
echo("<br>");

// Kesimpulan
echo "Kesimpulan: Objek dari kelas Manusia berhasil menyimpan dan menampilkan data nama, umur, dan NIK dengan menggunakan metode getter dan setter.";
?>
