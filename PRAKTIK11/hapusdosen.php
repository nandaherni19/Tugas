<?php
// buka koneksi dengan mysql
include("koneksi.php");

//mengecek apakah di url ada GET idDosen
if(isset($_GET["idDosen"])){

    // menyimpan variable id dari url ke dalam variable $idDosen
    $id = $_GET["idDosen"];

    // jalankan query delete untuk menghapus data
    $query = "DELETE FROM t_dosen WHERE idDosen='$id'";
    $hasil_query = mysqli_query($link, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
    die ("gagal menghapus data : ".mysql_errno($link).
    " - ".mysql_error($link));
    }
}
    // melakukan redirect ke halaman viewdosen.php
    header("location:viewdosen.php");
?>