<?php

    // Data gaji Obi
    $gajiPokok = 3250000;
    $tunjanganJabatan = 1200000;
    $persentasePajak = 10; // dalam persen

    // Hitung gaji kotor
    $gajiKotor = $gajiPokok + $tunjanganJabatan;

    // Hitung besaran pajak
    $pajak = ($persentasePajak / 100) * $gajiKotor;

    // Hitung gaji bersih
    $gajiBersih = $gajiKotor - $pajak;

    // Tampilkan hasil perhitungan
    echo "<h2>Perhitungan Gaji Bersih Obi</h2>";
    echo "Gaji Pokok: Rp. " . number_format($gajiPokok, 0, ',', '.') . "<br>";
    echo "Tunjangan Jabatan: Rp. " . number_format($tunjanganJabatan, 0, ',', '.') . "<br>";
    echo "Gaji Kotor: Rp. " . number_format($gajiKotor, 0, ',', '.') . "<br>";
    echo "Pajak Penghasilan (" . $persentasePajak . "%): Rp. " . number_format($pajak, 0, ',', '.') . "<br>";
    echo "<strong>Gaji Bersih yang diterima Obi: Rp. " . number_format($gajiBersih, 0, ',', '.') . "</strong><br>";

?>
