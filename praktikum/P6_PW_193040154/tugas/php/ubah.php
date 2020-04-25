<?php
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
    <h1><img src="../assets/img/hape.png">Form <br>Ubah Data Handphone</h1>
    <form method="POST">
      <ul align="center">
        <p>
          <input type="hidden" name="id" id="id" value="<?= $hp['Id']; ?>">
        </p>
        <p>
          <label for="merk">Merk :</label><br>
          <input type="text" name="merk" id="merk" autofocus required value="<?= $hp['Merk']; ?>"><br>
        </p>
        <p>
          <label for="type">Type :</label><br>
          <input type="text" name="type" id="type" required value="<?= $hp['Type']; ?>"><br>
        </p>
        <p>

          <label for="design">Design :</label><br>
          <input type="textarea" name="design" id="design" required value="<?= $hp['Design']; ?>">
        </p>
        <p>
          <label for="harga">Harga :</label><br>
          <input type="text" name="harga" id="harga" required value="<?= $hp['Harga']; ?>">
        </p>
        <p>
          <label for="gambar">Gambar :</label><br>
          <input type="text" name="gambar" id="gambar" required value="<?= $hp['Gambar']; ?>">
        </p>
        <br>
        <button type="submit" name="ubah" id="s">Ubah data</button>
        <button type="submit" id="k">
          <a href="admin.php">Kembali</a>
        </button>
      </ul>

    </form>
  </div>

</body>

</html>