<?php
function koneksi() {
$conn =  mysqli_connect("localhost","pw19154","#Akun#193040154#") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "pw19154_tubes_193040154") or die("Database salah!");

        return $conn;
}
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
   
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
