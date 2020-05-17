<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}
require 'functions.php';

if (isset($_POST['login'])) {
  $login = login($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style1.css">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>login</title>
</head>

<body>
  <?php if (isset($login['eror'])) : ?>
    <p style="color : red; font-style:italic;"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <div class="login-box">
    <img src="img/user1.png" class="user">
    <h1>Form Login</h1>
    <form action="" method="POST">

      <label>
        Username :
        <input type="text" name="username" autofocus autocomplete="off" required>
      </label>
      <label>
        Password :
        <input type="password" name="password" required>
      </label>
      <div class="login">
        <label for="">
          <input type="submit" name="login" value="login">
        </label>
      </div>
      <div class="register" align="center">
        <button><a href="registrasi.php">Registrasi</a></button>
      </div>
      </ul>
    </form>
  </div>
</body>

</html>