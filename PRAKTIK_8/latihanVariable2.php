<?php
// Menyimpan nama-nama hari ke dalam variabel array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];

// Menampilkan nama-nama hari satu per satu
echo "<h3>Daftar Nama Hari:</h3>";
foreach ($hari as $index => $namaHari) {
    echo "Hari ke-" . ($index + 1) . " adalah " . $namaHari . "<br>";
}
?>
