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
  <link rel="stylesheet" href="../css/style6.css">
</head>

<body>
  <div class="container">
    <h1>Form Registrasi</h1>
    <form action="" method="POST">
      <table align="center">
        <tr>
          <td><label for="username">Username</label></td>
          <td>:</td>
          <td><input type="text" name="username" autofocus autocomplete="off" required></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td>:</td>
          <td><input type="password" name="password" required></td>
        </tr>
      </table>
      <br><br>
      <button type="submit" name="registrasi" class="sub">Registrasi</button>
      </table>
    </form>
  </div>
</body>

</html>