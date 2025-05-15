<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nama: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
    <input type="submit" value="Simpan">
    <input type="reset" value="Bersihkan">
</form>
</body>
</html>