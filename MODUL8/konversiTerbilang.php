<?php
    $angka = "7";
    switch ($angka) {
        case 1:
            $terbilang = "satu";
            break;
        case 2:
            $terbilang = "dua";
            break;
        case 3:
            $terbilang = "tiga";
            break;
        case 4:
            $terbilang = "empat";
            break;
        case 5:
            $terbilang = "lima";
            break;
        case 6:
            $terbilang = "enam";
            break;
        case 7:
            $terbilang = "tujuh";
            break;
        case 8:
            $terbilang = "delapan";
            break;
        case 9:
            $terbilang = "sembilan";
            break;
        default:
            $terbilang = "Angka di luar rentang 1-9";
        }

        echo "<h2>Hasil Konversi:</h2>";
        echo "<p>Angka " . htmlspecialchars($angka) . " dikonversi menjadi: <strong>" . htmlspecialchars($terbilang) . "</strong></p>";
?>