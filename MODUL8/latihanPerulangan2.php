<?php
    $angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

    foreach ($angka as $nilai) {
        if ($nilai % 2 == 0) {
            echo "Nomor: " . htmlspecialchars($nilai) . " Genap<br>";
        } else {
            echo "Nomor: " . htmlspecialchars($nilai) . " Ganjil<br>";
        }
    }
?>