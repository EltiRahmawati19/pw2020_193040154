<?php 
if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'function.php';

$id = $_GET['id'];

$daftarhandphone = query("SELECT * FROM daftar_handphone WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<div class= "container">
    
    <img src="../assets/img/<?=$daftarhandphone['Gambar'];?>" alt="" class= "img">
    <div class= "keterangan">
    <p><?= $daftarhandphone['Merk']; ?></p> 
    <p><?= $daftarhandphone['Type']; ?></p> 
    <p><?= $daftarhandphone['Design']; ?></p>
    <p><?= $daftarhandphone['Harga']; ?></p> 
    </div>
    
    <button class = "tombol_kembali"><a href="../index.php">Kembali</a></button>
</div>
    
</body>
</html>