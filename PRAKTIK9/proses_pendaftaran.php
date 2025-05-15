<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    Selamat datang <?php echo $get["nama"]; ?> <br>
    NIM : <?php echo $get["nim"]; ?> <br>
    Email : <?php echo $get["email"]; ?> <br>
    Tempat, tanggal Lahir : <?php echo $_get["tempat"]; ?>, <?php echo $_POST["ttl"]; ?> <br>
    Alamat : <?php echo $_get["alamat"]; ?> <br>
    Jenis Kelamin : <?php echo $_get["gender"]; ?> <br>
</body>
</html>