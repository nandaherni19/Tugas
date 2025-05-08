<?php

    // Contoh fungsi sederhana
    function writeMsg($nama) {
        echo "Selamat datang: " . htmlspecialchars($nama) . "<br>";
    }

    // Pemanggilan fungsi
    writeMsg("Ahmad");

    echo "<br>";

    // Fungsi dengan mengirim nilai balik (return)
    function tambah(int $angka1, int $angka2): int {
        $hasil = $angka1 + $angka2;
        return $hasil; // mengirim nilai $hasil ke pemanggil
    }

    // Memanggil fungsi tambah dan menampilkan hasilnya
    $hasilTambah = tambah(5, 5);
    echo "Hasil penjumlahan: " . htmlspecialchars($hasilTambah);

    echo "<br>";

?>