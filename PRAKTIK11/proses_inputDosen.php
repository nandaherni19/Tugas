<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

    // membuat variable untuk menampung data dari form
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // jalankan query Insert untuk menambahkan data ke database
    $query = "INSERT INTO t_dosen VALUES (NUll, '$namaDosen', '$noHP')";
    $result = mysqli_query($link, $query);

    // periksa query apakah ada error
    if(!$result){
        die("query gagal dijalankan : ".mysqli_error($link).
        " - ".mysqli_error($link));
        }
    }

    // melakukan redirect (mengalihkan) ke halaman viewdosen.php
    header("locationviewdosen.php");
    ?>