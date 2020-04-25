<?php
function koneksi()
{
  $conn =  mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
  mysqli_select_db($conn, "tubes_193040154") or die("Database salah!");

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



