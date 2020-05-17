<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if (!isset($_GET['id'])) {
  header("Location : index.php");
  exit;
}

$id = $_GET['id'];
$m = query("SELECT * FROM mahasiswa WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/style5.css">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiwa</title>
</head>

<body>
  <div class="register-box">
    <h1>Form Ubah Data Mahasiswa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $m['id']; ?>">
      <div class="textbox">
        <input type="text" name="nama" placeholder="Nama" required value="<?= $m['nama']; ?>">
      </div>
      <div class="textbox">
        <input type="text" name="nrp" placeholder="NRP" required value="<?= $m['nrp']; ?>">
      </div>
      <div class="textbox">
        <input type="text" name="email" placeholder="Email" required value="<?= $m['email']; ?>">
      </div>
      <div class="textbox">
        <input type="text" name="jurusan" placeholder="Jurusan" required value="<?= $m['jurusan']; ?>">
      </div>
      <label>
        <input type="hidden" name="gambar_lama" value="<?= $m['gambar']; ?>">
        <label>
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
          <br><br>
          <img src="img/<?= $m['gambar']; ?>" width="120" style="display: block;" class="img-preview" align="right">
          <br><br>
          <button type="submit" name="ubah" class="sub">Ubah Data</button>
          </li>
          </ul>
    </form>
  </div>

  <script src="js/script.js"></script>
</body>

</html>