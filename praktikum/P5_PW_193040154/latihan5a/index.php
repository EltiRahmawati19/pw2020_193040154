<?php 
$conn =  mysqli_connect("localhost","root","") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040154") or die("Database salah!");

        $result = mysqli_query($conn, "SELECT * FROM daftar_handphone");
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
    <div class= "container";>
<h1>Daftar Handphone</h1>

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
    <?php while($row= mysqli_fetch_assoc($result)) : ?> 
    
    <tr>
    <td><?= $i ?></td>
    <td><b><?= $row['Merk'] ;?></b></td>
    <td><?= $row['Type'] ;?></td>
    <td><?= $row['Design'] ;?></td>
    <td><?=$row['Harga'] ;?></td>
    <td><img src="assets/img/<?= $row['Gambar']?> " class= "img";></td>
    </tr>
    <?php $i++ ?>
    <?php endwhile;?>
    
    </table>
    </div>
</body>
</html>
