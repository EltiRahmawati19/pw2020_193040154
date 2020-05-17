<?php
session_start();
require 'function.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil berdasarkan id

  $result = mysqli_query(koneksi(), "SELECT *FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);
  // cek cooki dan username 

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
  //login
}
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }
    if (isset($_POST['remember'])) {
      setcookie('username', $row['username'], time() + 60 + 60 + 24);
      $hash = hash('sha256', $row['id']);
      setcookie('hash', $hash, time() + 60 + 60 + 24);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("Location: admin.php");
      die;
    }
    header("Location: ../index.php");
    die;
  }
  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="../css/style3.css">
</head>

<body>
  <div class="container">

    <div class="login-box">
      <img src="../assets/icon/user1.png" class="user">
      <h1>Form Login</h1>
      <form action="" method="POST">
        <?php if (isset($error)) : ?>
          <p style="color: red; font-style: italic;">Username atau password salah !</p>
        <?php endif; ?>
        <label for="username" id="username">Username
          <input type="text" name="username" placeholder="Enter username" autofocus autocomplete="off" required>
        </label>
        <label for="password" id="password">Password
          <input type="password" name="password" placeholder="Enter password" autofocus required>
        </label>
        <input type="submit" name="login" value="login">
        <div class="remember" align="center">
          <input type="checkbox" name="remember">
          <label for="remember">Remember Me</label>
        </div>
        <div class="registrasi" align="center">
          <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
        </div>
      </form>
    </div>

  </div>
</body>

</html>