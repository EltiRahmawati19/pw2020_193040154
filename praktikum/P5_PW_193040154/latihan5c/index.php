<?php 
require 'php/function.php';
$daftarhandphone  = query("SELECT * FROM daftar_handphone")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Phone</title>
</head>
<body>
    
<h1>Daftar Handphone</h1>
<div class= "container">
    <div class= "daftar">

    <?php foreach($daftarhandphone as $hp ) : ?> 
    <p class= "Merk">
    <a href="php/detail.php?id=<?= $hp['Id'] ?> ">
     <?= $hp["Merk"] ?>
    </a>
    </p>
    <?php endforeach;?>
    </div>
    </div>
</body>
</html>
