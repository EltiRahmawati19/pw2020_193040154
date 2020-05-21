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
function tambah($data)
{
  $conn = koneksi();
  $merk = htmlspecialchars($data['merk']);
  $type = htmlspecialchars($data['type']);
  $design = htmlspecialchars($data['design']);
  $harga = htmlspecialchars($data['harga']);
  $gambar = htmlspecialchars($data['gambar']);

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
  $gambar = htmlspecialchars($data['gambar']);

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

  $query_tambah = "INSERT INTO user VALUES('', '$username','$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
