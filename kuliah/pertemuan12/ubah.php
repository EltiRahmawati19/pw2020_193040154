<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

if(!isset($_GET['id'])) {
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

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiwa</title>
</head>

<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name= "id" value="<?= $m['id']; ?>">

    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
        </label>
      </li><br>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" autofocus required value="<?= $m['nrp']; ?>">
        </label>
      </li><br>
      <li>
        <label>
          Email :
          <input type="text" name="email" autofocus required value="<?= $m['email']; ?>">
        </label>
      </li><br>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" autofocus required value="<?= $m['jurusan']; ?>">
        </label>
      </li><br>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" autofocus required value="<?= $m['gambar']; ?>">
        </label>
      </li><br>
      <li>
        <button type="submit" name="ubah">Ubah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>