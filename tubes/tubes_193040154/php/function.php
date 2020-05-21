<?php
function koneksi()
{
  $conn =  mysqli_connect("localhost", "pw19154", "#Akun#193040154#") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "pw19154_tubes_193040154") or die("Database salah!");

  return $conn;
}
function query($sql)
{
  $conn = koneksi();
  $result = mysqli_query($conn, "$sql");

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
function upload()
{
  $nama_file = $_FILES['gambar']['name'];
  $tipe_file = $_FILES['gambar']['type'];
  $ukuran_file = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmp_file = $_FILES['gambar']['tmp_name'];

  //jika user tidak menampilkan gambar
  if ($error == 4) {
    /*echo "<script>
        alert('pilih gambar terlebih dahulu!');
        </script>";*/
    return '../assets/img/nonephoto.jpg';
  }
  // cek ekstensi file
  $daftar_gambar = ['jpg', 'jpeg', 'png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
        alert('yang anda pilih bukan gambar!');
        </script>";
    return false;
  }
  // cek tipe file
  if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
    echo "<script>
        alert('yang anda pilih bukan gambar!');
        </script>";
    return false;
  }
  // cek ukuran file
  if ($ukuran_file > 5000000) {
    echo "<script>
        alert('Ukuran gambar terlalu besar!');
        </script>";
    return false;
  }

  // lolos upload

  $nama_file_baru = uniqid();
  $nama_file_baru .= '.';
  $nama_file_baru .= $ekstensi_file;
  move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

  return $nama_file_baru;
}
function tambah($data)
{
  $conn = koneksi();
  $merk = htmlspecialchars($data['merk']);
  $type = htmlspecialchars($data['type']);
  $design = htmlspecialchars($data['design']);
  $harga = htmlspecialchars($data['harga']);
  //$gambar_lama = htmlspecialchars($data['gambar_lama']);
  $gambar = upload();

  if (!$gambar) {
    return false;
  }
  $query = "INSERT INTO 
                daftar_handphone
                VALUES
                (null, '$merk','$type','$design','$harga','$gambar');
                ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function hapus($id)
{
  $conn = koneksi();
  $hp = query("SELECT * FROM daftar_handphone  WHERE Id = $id")[0];
  if ($hp['Gambar'] != 'nonephoto.jpg') {
    unlink('../assets/img/' . $hp['Gambar']);
  }

  mysqli_query($conn, "DELETE FROM daftar_handphone WHERE Id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $merk = htmlspecialchars($data['merk']);
  $type = htmlspecialchars($data['type']);
  $harga = htmlspecialchars($data['harga']);
  $gambar_lama = htmlspecialchars($data['gambar_lama']);

  $gambar = upload();
  if (!$gambar) {
    return false;
  }
  if ($gambar == '../assets/img/nonephoto.jpg') {
    $gambar == $gambar_lama;
  }

  $query = "UPDATE daftar_handphone 
            SET 
            Merk = '$merk',
            Type = '$type',
            Harga = '$harga',
            Gambar = '$gambar'
            WHERE Id = $id ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
          alert('username sudah digunakan');
          </script>";
    return false;
  }

  $password = password_hash($password, PASSWORD_DEFAULT);

  $query_tambah = "INSERT INTO user VALUES(null, '$username','$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
