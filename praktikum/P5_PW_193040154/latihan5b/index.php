<?php 
require 'php/function.php';
$daftarhandphone  = query("SELECT * FROM daftar_handphone")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Phone</title>
</head>
<body>
<h1>Daftar Handphone</h1>
<div class= "container";>
<table  border= "1" cellspacing="2" cellpadding="20" >

<tr id= "field";>
<th>Id</th>
<th>Merk</th>
<th>Type</th>
<th>Design</th>
<th>Harga</th>
<th>Gambar</th>
</tr>
    <?php $i=1 ?>
    <?php foreach($daftarhandphone as $hp ) : ?> 

    
    <tr id = "isi">
    <td><?= $i ?></td>
    <td><b><?= $hp['Merk'] ;?></b></td>
    <td><?= $hp['Type'] ;?></td>
    <td><?= $hp['Design'] ;?></td>
    <td><?=$hp['Harga'] ;?></td>
    <td><img src="assets/img/<?= $hp['Gambar']?> " class= "img";></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach;?>
    
    </table>
    </div>
</body>
</html>
