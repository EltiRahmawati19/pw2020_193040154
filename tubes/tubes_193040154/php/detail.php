    <?php
    if (!isset($_GET['Id'])) {
        header("Location:../index.php");
        exit;
    }

    require 'function.php';

    $id = $_GET['Id'];
    $daftarhandphone = query("SELECT * FROM daftar_handphone WHERE Id = $id")[0];




    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style2.css">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <img src="../assets/img/<?= $daftarhandphone['Gambar']; ?>" alt="" width="250px">
            <div class="keterangan">
                <p><?= $daftarhandphone['Merk']; ?></p>
                <p><?= $daftarhandphone['Type']; ?></p>
                <p><?= $daftarhandphone['Design']; ?></p>
                <p><?= $daftarhandphone['Harga']; ?></p>
            </div>

            <a href="../index.php"><button class="tombol_kembali">Kembali</button></a>
        </div>

    </body>

    </html>