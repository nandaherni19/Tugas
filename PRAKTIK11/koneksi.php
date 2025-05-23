<?php
// Variabel koneksi dengan database MySQL
$host = "localhost";
$user = "root";
$paswd = "";
$name = "latiahandb"; // Ganti dengan nama database kamu, misalnya: latiahandb

// Proses koneksi
$link = mysqli_connect($host, $user, $paswd, $name);

// Periksa koneksi
if (!$link) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}
?>