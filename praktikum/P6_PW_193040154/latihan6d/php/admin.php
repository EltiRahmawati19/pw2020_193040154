<?php
require 'function.php';

$daftarhandphone = query("SELECT * FROM daftar_handphone");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style3.css">
</head>

<body>


  <div class="container">
    <div class="add">
      <a href="tambah.php"><button id="tambah">Tambah Data</button></a>
    </div>

    <h1><img src="../assets/img/hape.png" width="100px" height="100px" align="center">PHONE CELL</h1>

    <table border="1" cellpadding="13" cellspacing="0" class="table">
      <tr id="head">
        <th>Id</th>
        <th>opsi</th>
        <th>Merk</th>
        <th>Type</th>
        <th>Design</th>
        <th>Harga</th>
        <th>Gambar</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach ($daftarhandphone as $hp) : ?>

        <tr>
          <td id="tab"><?= $i; ?></td>
          <td id="tab">

            <a href="ubah.php?Id=<?= $hp['Id']; ?>"><button id="b1">Ubah </button></a><br><br>


            <a href="hapus.php?Id=<?= $hp['Id']; ?>" onclick="return confirm('Hapus Data??');"> <button id="b2">Hapus</button></a>


          </td>
          <td id="tab"><?= $hp['Merk']; ?></td>
          <td id="tab"><?= $hp['Type']; ?></td>
          <td id="tab"><?= $hp['Design']; ?></td>
          <td id="tab"><?= $hp['Harga']; ?></td>
          <td><img src="../assets/img/<?= $hp['Gambar']; ?>" alt="" class="img"></td>

        </tr>

        <?php $i++; ?>
      <?php endforeach; ?>
    </table>

  </div>

</body>

</html>