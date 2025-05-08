<?php

// Contoh nilai yang akan dikonversi
$nilai = 85;

// Menentukan konversi nilai ke huruf
if ($nilai >= 90 && $nilai <= 100) {
    $huruf = "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    $huruf = "AB";
} elseif ($nilai >= 70 && $nilai <= 79) {
    $huruf = "B";
} elseif ($nilai >= 60 && $nilai <= 69) {
    $huruf = "BC";
} elseif ($nilai >= 0 && $nilai <= 59) {
    $huruf = "C";
} else {
    $huruf = "Nilai tidak valid";
}

// Menampilkan hasil
echo "<h3>Konversi Nilai</h3>";
echo "Nilai Angka: $nilai<br>";
echo "Nilai Huruf: $huruf";
?>
