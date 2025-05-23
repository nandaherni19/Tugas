<?php
// Memanggil koneksi.php untuk koneksi ke database
include 'koneksi.php';

// Mengecek apakah data dikirim dari form
if (isset($_POST["npm"])) {
    // Menampung data dari form
    $npm = $_POST['npm'];
    $namaMahasiswa = $_POST['namaMhs'];
    $noHP = $_POST['noHP'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];

    // Menjalankan query untuk memasukkan data ke database
    $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES ('$npm', '$namaMahasiswa', '$prodi', '$alamat', '$noHP')";
    $result = mysqli_query($link, $query);

    // Periksa apakah query berhasil
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

// Redirect ke halaman tampilan mahasiswa
header("Location:viewmahasiswa.php");
exit;
?>