<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script> 
  alert('user baru berhasil ditambahkan. silahkan login!');
  document.location.href = 'login.php';
  </script>";
  } else {
    echo 'user gagal ditambahkan!';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="css/style1.css">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>

<body>
  <div class="login-box">
  <img src="img/user1.png" class="user">
    <h3>Form Registrasi</h3>
    <form action="" method="POST">

      <label>
        Username :
        <input type="text" name="username" autocomplete="off" autofocus required>
      </label>
      <label>
        Password :
        <input type="password" name="password1" required>
      </label>
      <label>
        Konfirmasi Password :
        <input type="password" name="password2" required>
      </label>
      <div class="register" align="center">
        <button type="submit" name="registrasi">Registrasi</button>
      </div>
  </div>
  </form>
</body>

</html>