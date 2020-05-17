<?php
require 'function.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
          alert('Registrasi Berhasil!');
          document.location.href = 'login.php';
          </script>";
  } else {
    echo "<script>
          alert('Registrasi Gagal!');
          </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="../css/style4.css">
</head>

<body>
  <div class="container">
    <div class="register-box">
      <h1>Form Registrasi</h1>
      <form action="" method="POST">
        <div class="textbox">
          <label>
            <img src="../assets/icon/user3.png" aria-hidden="true">
            <input type="text" name="username" placeholder="username" autocomplete="off" autofocus required>
          </label>
        </div>
        <div class="textbox">
          <label>
            <img src="../assets/icon/lock.png" aria-hidden="true">
            <input type="password" name="password" placeholder="password" required>
          </label>
        </div>
        <button type="submit" name="registrasi" class="sub">Registrasi</button>
      </form>
    </div>
  </div>
</body>

</html>