<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 840px;
            margin: auto;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Tabel Dosen</h1>
    <center><a href="input.php">Input Data</a></center>
    <br/>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        // jalankan query menampilkan data
        $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
        $result = mysqli_query($link,$query);

        //mengecek apakah ada error di query

        if(!$result){
            die ("Query Error: ".mysqli_errno($link).
            " - ".mysqli_error($link));
        }

        // hasil query akan disimpan dalam variable bentuyk array
        //kemudian akan dicetak dengan perulangan while

        while ($data = mysqli_fetch_assoc($result))
        {
            //mencetak data

            echo "<tr>";
            echo "<td>$data[idDosen]</td>"; //data id dosen
            echo "<td>$data[namaDosen]</td>"; //data nama dosen
            echo "<td>$data[noHP]</td>"; //data no hp dosen

            //membuat link mngedit dan menghapus dtaa

            echo '<td>
            <a href="editdosen.php?idDosen='.$data['idDosen'].'">Edit</a>
            <a href="hapusdosen.php?idDosen='.$data['idDosen'].'"
            onclick="return confirm(\'anda yakin akan menghapus data?\')">Hapus</a>
         </td>';
         echo "</tr>";
        }
        ?>
    </table>
</body>
</html>