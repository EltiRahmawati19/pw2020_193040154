<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style5.css">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiwa</title>
</head>

<body>
  <div class="register-box">
    <h1>Form Tambah Data Mahasiswa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <div class="textbox">
        <input type="text" name="nama" placeholder="Nama" autofocus required>
      </div>
      <div class="textbox">
          <input type="text" name="nrp" placeholder="NRP" autofocus required>
      </div>
      <div class="textbox">  
          <input type="text" name="email" placeholder="Email" autofocus required>
      </div>
      <div class="textbox">
          <input type="text" name="jurusan" placeholder="Jurusan" autofocus required>
      </div>

      <label>
        <input type="file" name="gambar" class="gambar" onchange="previewImage()">
      </label>
      <img src="img/nonephoto.jpg" width="120" style="display: block;" class="img-preview" align="right">
      <br><br>
      <button type="submit" name="tambah" class="sub">Tambah Data</button>
      </li>
      </ul>
    </form>
  </div>



  <script src="js/script.js"></script>
</body>

</html>