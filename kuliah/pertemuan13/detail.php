<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style3.css">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <div class="container">
    <h1>Detail Mahasiswa</h1>
    <table align="center">
      <tr>
        <td><img src="img/<?= $m['gambar']; ?>" width="300"></td>
      </tr>
      <tr>
        <td>NRP : <?= $m['nrp']; ?></td>
      </tr>
      <tr>
        <td>Nama : <?= $m['nama']; ?></td>
      </tr>
      <tr>
        <td>Email : <?= $m['email']; ?></td>
      </tr>
      <tr>
        <td>Jurusan : <?= $m['jurusan']; ?></td>
      </tr>
      <tr>
        <td><a href="ubah.php?id=<?= $m['id']; ?>" id="back">Ubah</a> | <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?');" id="back">Hapus</a></td>
      </tr>
      <tr>
        <td ><a href="index.php"id="back">Kembali ke daftar mahasiswa</a></td>
      </tr>
  </div>
  </table>
</body>

</html>