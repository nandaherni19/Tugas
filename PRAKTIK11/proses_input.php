<?php
include "koneksi.php"; // Panggil koneksi

$namaDosen = $_POST['namaDosen'];
$noHP = $_POST['noHP'];

// Query insert ke database
$query = "INSERT INTO t_dosen (namaDosen, noHP) VALUES ('$namaDosen', '$noHP')";

if (mysqli_query($link, $query)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($link);
}
mysqli_close($link);
header("location:viewdosen.php")
?>
