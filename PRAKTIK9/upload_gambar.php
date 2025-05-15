<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="243307071">
    <meta name="outhor" content="Brelian Dwi Oktaviani">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih Gambar yang akan di upload : </label></p>
        <input type="file" name="gambar" id="gambar1"><br><br>
        <input type="submit" value="Upload Image" name="submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["gambar"])) {
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check !== false) {
        echo "File berupa citra/gambar - " . $check["mime"] . ".<br>";
    } else {
        echo "File bukan gambar.<br>";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, file anda terlalu besar.<br>";
        $uploadOk = 0;
    }

    if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
        echo "Sorry, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.<br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "File ". htmlspecialchars(basename($_FILES["gambar"]["name"])). " berhasil diupload.";
        } else {
            echo "Sorry, ada error saat upload.";
        }
    } else {
        echo "Sorry, file anda gagal upload.";
    }
}
?>
</body>
</html>