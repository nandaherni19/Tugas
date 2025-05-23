<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f4f8;
      margin: 0;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .container {
      max-width: 900px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      table-layout: fixed;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: left;
      word-wrap: break-word;
    }

    th {
      background-color: #2e86de;
      color: #fff;
      font-weight: 600;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    a {
      color: #2e86de;
      text-decoration: none;
      margin-right: 10px;
      font-weight: 600;
    }

    a:hover {
      text-decoration: underline;
    }

    .center {
      text-align: center;
      margin-bottom: 15px;
    }

    .search-box {
      margin-bottom: 20px;
      text-align: center;
    }

    .search-box input[type="text"] {
      padding: 8px;
      width: 250px;
    }

    .search-box input[type="submit"],
    .search-box a {
      padding: 8px 12px;
      border-radius: 4px;
      text-decoration: none;
      border: none;
      background-color: #ccc;
      cursor: pointer;
      font-weight: 600;
    }

    .search-box input[type="submit"] {
      background-color: #2e86de;
      color: white;
      margin-left: 10px;
    }

    .search-box a {
      background-color: #888;
      color: white;
    }

    .search-box a:hover {
      background-color: #555;
    }

  </style>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <div class="search-box">
    <form method="GET" action="viewMahasiswa.php">
      <input type="text" name="keyword" placeholder="Cari NPM atau Nama..." value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>">
      <input type="submit" value="Cari">
      <a href="viewMahasiswa.php">Reset</a>
    </form>
    <br>
    <a href="inputmahasiswa.php" style="color: #fff; background-color: #28a745; padding: 8px 12px; border-radius: 4px;">+ Input Data</a>
  </div>

  <div class="container">
    <table>
      <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Opsi</th>
      </tr>
      <?php
      $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

      if (!empty($keyword)) {
          echo "<p style='text-align:center; color:green;'>Menampilkan hasil pencarian untuk: <strong>" . htmlspecialchars($keyword) . "</strong></p>";
          $query = "SELECT * FROM t_mahasiswa 
                    WHERE npm LIKE '%$keyword%' 
                    OR namaMhs LIKE '%$keyword%' 
                    ORDER BY npm ASC";
      } else {
          $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
      }

      $result = mysqli_query($link, $query);

      if (!$result) {
          die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
      }

      while ($data = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($data['npm']) . "</td>";
          echo "<td>" . htmlspecialchars($data['namaMhs']) . "</td>";
          echo "<td>" . htmlspecialchars($data['prodi']) . "</td>";
          echo "<td>" . htmlspecialchars($data['alamat']) . "</td>";
          echo "<td>" . htmlspecialchars($data['noHP']) . "</td>";
          echo "<td>
                  <a href='editmahasiswa.php?npm=" . urlencode($data['npm']) . "'>Edit</a>
                  <a href='hapusmahasiswa.php?npm=" . urlencode($data['npm']) . "' onclick=\"return confirm('Anda yakin akan menghapus data ini?');\">Hapus</a>
                </td>";
          echo "</tr>";
      }
      ?>
    </table>
  </div>

</body>
</html>
