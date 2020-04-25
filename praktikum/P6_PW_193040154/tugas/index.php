<?php
require 'php/function.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $daftarhandphone = query("SELECT * FROM daftar_handphone WHERE 
                          Merk LIKE '%$keyword'OR
                          Type LIKE '%$keyword' OR
                          Design LIKE '%$keyword%' OR
                          Harga LIKE '%$keyword%'");
} else {
    $daftarhandphone = query("SELECT * FROM daftar_handphone");
}
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
    <div class="container">
        <h1><img src="assets/img/hp.png" alt="" width="120px">Daftar <br> Handphone </h1>
        <div class="daftar">
            <form action="" method="GET" align="center">
                <input type="text" name="keyword" size="30" placeholder="cari disini...." autocomplete="off" autofocus>
                <button type="submit" name="cari">Cari</button>
            </form>
            <?php if (empty($daftarhandphone)) : ?>
                <tr>
                    <td colspan="4">
                        <p style="color : red; font-style:italic;">Tidak Ditemukan</p>
                    </td>
                </tr>
            <?php else : ?>

                <?php foreach ($daftarhandphone as $hp) : ?>
                    <p class="Merk">
                        <a href="php/detail.php?id=<?= $hp['Id'] ?>" class="merk">
                            <?= $hp["Merk"] ?>
                        </a>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>
            <a href="php/admin.php"><button class="add">Spesifikasi</button></a>
        </div>
    </div>

</body>

</html>