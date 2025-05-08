<?php

    // Data nilai akhir siswa dalam bentuk array
    $nilaiSiswa = array(
        array("No Urut" => 1, "Poin" => 75, "Siswa" => "Adi"),
        array("No Urut" => 2, "Poin" => 80, "Siswa" => "Joni"),
        array("No Urut" => 3, "Poin" => 65, "Siswa" => "Jihan"),
        array("No Urut" => 4, "Poin" => 70, "Siswa" => "Aya"),
        array("No Urut" => 5, "Poin" => 85, "Siswa" => "Ita"),
        array("No Urut" => 6, "Poin" => 90, "Siswa" => "Budi"),
        array("No Urut" => 7, "Poin" => 95, "Siswa" => "Tini"),
        array("No Urut" => 8, "Poin" => 65, "Siswa" => "Sari")
    );

    echo "<h2>Data Nilai Akhir Siswa</h2>";
    echo "<table border='1'>";
    echo "<tr><th>No Urut</th><th>Poin</th><th>Siswa</th></tr>";
    foreach ($nilaiSiswa as $siswa) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($siswa["No Urut"]) . "</td>";
        echo "<td>" . htmlspecialchars($siswa["Poin"]) . "</td>";
        echo "<td>" . htmlspecialchars($siswa["Siswa"]) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";

    // a) Tampilkan poin siswa dengan nomor urut 5
    echo "<h3>a) Poin siswa dengan nomor urut 5:</h3>";
    foreach ($nilaiSiswa as $siswa) {
        if ($siswa["No Urut"] == 5) {
            echo "Siswa: " . htmlspecialchars($siswa["Siswa"]) . ", Poin: " . htmlspecialchars($siswa["Poin"]) . "<br>";
            break; // Menghentikan loop setelah menemukan siswa dengan nomor urut 5
        }
    }

    echo "<br>";

    // b) Tampilkan semua nama siswa yang memiliki poin 90
    echo "<h3>b) Siswa dengan poin 90:</h3>";
    $siswaPoin90 = array();
    foreach ($nilaiSiswa as $siswa) {
        if ($siswa["Poin"] == 90) {
            $siswaPoin90[] = htmlspecialchars($siswa["Siswa"]);
        }
    }
    if (count($siswaPoin90) > 0) {
        echo "Siswa: " . implode(", ", $siswaPoin90) . "<br>";
    } else {
        echo "Tidak ada siswa dengan poin 90.<br>";
    }

    echo "<br>";

    // c) Tampilkan semua nama siswa yang memiliki poin 100 (hasil: tidak ada)
    echo "<h3>c) Siswa dengan poin 100:</h3>";
    $siswaPoin100 = array();
    foreach ($nilaiSiswa as $siswa) {
        if ($siswa["Poin"] == 100) {
            $siswaPoin100[] = htmlspecialchars($siswa["Siswa"]);
        }
    }
    if (count($siswaPoin100) > 0) {
        echo "Siswa: " . implode(", ", $siswaPoin100) . "<br>";
    } else {
        echo "Tidak ada siswa dengan poin 100.<br>";
    }

?>
