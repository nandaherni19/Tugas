<?php

// Jumlah uang yang akan diambil Ani
$jumlahUang = 1387500;

// Daftar pecahan uang yang berlaku (dari terbesar ke terkecil)
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

// Inisialisasi array untuk menyimpan jumlah setiap pecahan
$jumlahPecahan = array();

echo "<h2>Pembagian Uang Pecahan untuk Ani</h2>";
echo "Jumlah uang yang diambil: Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br><br>";

// Proses perhitungan jumlah setiap pecahan
$sisaUang = $jumlahUang;
foreach ($pecahan as $nilaiPecahan) {
    $banyakPecahan = floor($sisaUang / $nilaiPecahan);
    if ($banyakPecahan > 0) {
        $jumlahPecahan[$nilaiPecahan] = $banyakPecahan;
        $sisaUang = $sisaUang % $nilaiPecahan;
    }
}

// Tampilkan hasil pembagian pecahan
echo "Rincian pecahan yang diperoleh:<br>";
foreach ($jumlahPecahan as $nilai => $jumlah) {
    echo "- Rp. " . number_format($nilai, 0, ',', '.') . " sebanyak " . $jumlah . " lembar<br>";
}

// Tampilkan sisa uang (jika ada, meskipun seharusnya 0)
if ($sisaUang > 0) {
    echo "<br>Sisa uang yang tidak dapat dipecah: Rp. " . number_format($sisaUang, 0, ',', '.') . "<br>";
}

?>