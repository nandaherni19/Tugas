<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Mahasiswa</title>
  <style>
    /* Gaya dasar untuk seluruh halaman */
    body {
      font-family: Arial, sans-serif;
      background: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    /* Kontainer utama form */
    .container {
      background: #fff;
      padding: 20px 40px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 500px;
    }

    /* Judul form */
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    /* Setiap group input */
    .form-group {
      margin-bottom: 15px;
    }

    /* Label */
    label {
      display: block;
      margin-bottom: 5px;
      color: #333;
    }

    /* Input, select */
    input[type="text"],
    input[type="email"],
    input[type="number"],
    select {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    /* Container untuk tombol */
    .button-container {
      text-align: center;
    }

    /* Tombol submit */
    button[type="submit"] {
      background: #4CAF50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button[type="submit"]:hover {
      background: #45a049;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 600px) {
      .container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<div class="container">
<h2>Input Data Mahasiswa</h2>
<form action="proses_inputmahasiswa.php" method="post">
  
  <div class="form-group">
    <label for="npm">NPM</label>
    <input type="text" name="npm" id="npm" required>
  </div>
  <div class="form-group">
    <label for="namaMhs">Nama Lengkap</label>
    <input type="text" id="namaMhs" name="namaMhs" placeholder="Masukkan nama lengkap" required>
  </div>
  <div class="form-group">
    <label for="noHP">No. HP</label>
    <input type="text" id="noHP" name="noHP" placeholder="Masukkan nomor HP" required>
  </div>
  <div class="form-group">
    <label for="prodi">Program Studi</label>
    <select id="prodi" name="prodi" required>
      <option value="">--Pilih Jurusan--</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Teknik Elektro">Teknik Elektro</option>
      <option value="Teknik Mesin">Teknik Mesin</option>
      <option value="Perkeretaapian">Perkeretaapian</option>
      <option value="Teknik Komputer Kontrol">Teknik Komputer Kontrol</option>
      <option value="Teknik Rekayasa Perangkat Lunak">Teknik Rekayasa Perangkat Lunak</option>
      <option value="Teknik Rekayasa Otomotif">Teknik Rekayasa Otomotif</option>
    </select>
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" required>
  </div>
  <div class="button-container">
    <button type="submit">Submit</button>
  </div>
  </div>
</form>
</body>
</html>
