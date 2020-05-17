<?php
require 'php/function.php';

$result = mysqli_query(koneksi(), "SELECT *FROM daftar_handphone");
$row = mysqli_fetch_assoc($result);


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

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Daftar Handphone</title>
</head>

<body>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

    <div class="container">
      <h3><img src="assets/icon/shopping.png" alt=""></h3>
      <a class="navbar-brand font-weight-bold" href="#">PHONE CELL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-4">
          <li class="nav-item active">
            <a class="nav-link" href="#carouselExampleSlidesOnly">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#detail">Detail<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="php/login.php">Login<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#Contact">Contact us<span class="sr-only">(current)</span></a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0" method="GET">
          <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search" width="10">
          <a href="#detail"><button class="btn btn-dark my-2 my-sm-0" type="submit" name="cari">cari</button></a>
        </form>

      </div>
    </div>

  </nav> -->
  <div class="row mt-5 no-gutters">
    <div class="col-md-2 bg-light">
      <ul class="list-group p-2 pt-5">
        <li class="list-group-item text-light bg-dark">Produk Kami</li>
        <li class="list-group-item">Samsung</li>
        <li class="list-group-item">Lenovo</li>
        <li class="list-group-item">Oppo</li>
        <li class="list-group-item">Vivo</li>
        <li class="list-group-item">Asus</li>
        <li class="list-group-item">Realme</li>
      </ul>
    </div>
    <div class="col-md-10">
      <!-- slider -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <h3 class="tembus">Selamat Datang <br><img src="assets/img/phone.png" alt="">Di Produk kami</h3>
          <div class="carousel-item active">
            <img src="assets/img/slider1.jpg" class="d-block w-100" width="100%">
          </div>
          <div class="carousel-item">
            <img src="assets/img/slider2.jpg" class="d-block w-100" width="100">
          </div>
          <div class="carousel-item">
            <img src="assets/img/slider4.jpg" class="d-block w-100" width="100">
          </div>
        </div>
      </div>
    </div>
  </div>


  <h3 id="detail" class="text-center mt-4">PRODUK KAMI</h3>
  <div class="container">
    <div class="gambar">
      <?php if (empty($daftarhandphone)) : ?>
        <tr>
          <td colspan="4">
            <p style="color : red; font-style:italic;">Tidak Ditemukan</p>
          </td>
        </tr>
      <?php else : ?>
        <?php foreach ($daftarhandphone as $hp) : ?>
          <div class="foto">
            <img src="assets/img/<?= $hp['Gambar'] ?>" alt="" width="100">
            <div class="Gambar"><br>
              <p><?= $hp['Merk']; ?></p>
              <button class="mt-4 btn btn-warning"><a href="php/detail.php?Id=<?= $hp['Id'] ?>">detail
                </a></button>

            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>


  <section id="Contact" class="Contact mb-5 bg-light">
    <div class="container">
      <div class="row pt-4 mb-5">
        <div class="col text-center">
          <h3> Contact us </h3>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card text-white bg-dark mb-3 text-center">
            <div class="card-body">
              <h5 class="card-title">Contact Me</h5>
              <p class="card-text">Silahkan untuk menghubungi saya dengan mengisi data diri anda di form ini, Terima
                kasih.</p>
            </div>
          </div>
          <ul class="list-group list-group-flush text-dark">
            <li class="list-group-item">
              <h3>Location</h3>
            </li>
            <li class="list-group-item">My Home</li>
            <li class="list-group-item">Jln. Trans Suruk 60, Kalimantan Barat</li>
            <li class="list-group-item">West Borneo Indonesia</li>
          </ul>
        </div>

        <div class="col-lg-6">
          <form>
            <div class="form-group">
              <label for="Name">Name</label>
              <input type="text" class="form-control" id="Name">
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input type="text" class="form-control" id="Email">
            </div>
            <div class="form-group">
              <label for="No Telp">No Telp</label>
              <input type="text" class="form-control" id="No Telp">
            </div>
            <div class="form-group">
              <label for="Pesan">Pesan</label>
              <textarea type="Pesan" class="form-control" id="Pesan"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
          </form>

        </div>
      </div>
    </div>

  </section>


  <!-- footer -->
  <footer class="bg-dark text-white">
    <div class="container">
      <div class="row pt-3">
        <div class="col text-center">
          <p>Copyright 2020.</p>
        </div>
      </div>
    </div>
  </footer>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>