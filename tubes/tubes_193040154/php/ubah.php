<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
require 'function.php';
$id = $_GET['Id'];
$hp = query("SELECT * FROM daftar_handphone WHERE Id = $id")[0];
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script> 
              alert('data gagal diubah!');
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
      <h1>Form Ubah Data Handphone</h1>
      <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id" value="<?= $hp['Id']; ?>">
        <div class="textbox">
          <label for="merk"></label>
          <img src="../assets/icon/merk.png" alt="">
          <input type="text" name="merk" id="merk" autofocus required value="<?= $hp['Merk']; ?>"><br>
        </div>
        <div class="textbox">
          <label for="type"></label>
          <img src="../assets/icon/type.png" alt="">
          <input type="text" name="type" id="type" required value="<?= $hp['Type']; ?>"><br>
        </div>
        <div class="textbox">
          <label for="design"></label>
          <img src="../assets/icon/design.png" alt="">
          <input type="textarea" name="design" id="design" required value="<?= $hp['Design']; ?>">
        </div>
        <div class="textbox">
          <label for="harga"></label>
          <img src="../assets/icon/harga.png" alt="">
          <input type="text" name="harga" id="harga" required value="<?= $hp['Harga']; ?>">
        </div>
        <input type="hidden" name="gambar_lama" value="<?= $hp['Gambar']; ?>">
        <label>
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </label>
        <img src="../assets/img/<?= $hp['Gambar']; ?>" width="120" style="display: block;" class="img-preview" align="right">
        <br><br>
        <button type="submit" name="ubah" class="sub">Ubah data</button>
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