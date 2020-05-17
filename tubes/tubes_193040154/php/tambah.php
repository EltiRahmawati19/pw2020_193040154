<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
require 'function.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script> 
              alert('data gagal ditambahkan!');
              document.location.href = 'admin.php';
              </script> ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style5.css">
</head>

<body>

  <div class="container">
    <div class="register-box">
      <h1>Form Data Handphone</h1>
      <form method="POST" enctype="multipart/form-data">
        <div class="textbox">
          <label for="merk"></label>
          <img src="../assets/icon/merk.png" alt="">
          <input type="text" name="merk" id="merk" placeholder="Merk" required autofocus>

        </div>
        <div class="textbox">
          <label for="type"></label>
          <img src="../assets/icon/type.png" alt="">
          <input type="text" name="type" id="type" placeholder="Type" required><br>
        </div>
        <div class="textbox">
          <label for="design"></label>
          <img src="../assets/icon/design.png" alt="">
          <input type="textarea" name="design" id="design" placeholder="Design" required>
        </div>
        <div class="textbox">
          <label for="harga"></label>
          <img src="../assets/icon/harga.png" alt="">
          <input type="text" name="harga" id="harga" placeholder="Harga" required>
        </div>

        <label>
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="../assets/img/nonephoto.jpg" width="120" style="display: block;" class="img-preview" align="right">
        <br><br>
        <button type="submit" name="tambah" class="sub">Tambah Data</button>
        <br><br>
        <button type="submit" class="back">
          <a href="admin.php">Kembali</a>
        </button>

      </form>
    </div>
  </div>
  <script src="../js/script.js"></script>
</body>

</html>