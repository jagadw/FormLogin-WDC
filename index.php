<?php
    include 'koneksi.php';
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "Login gagal! username dan password salah!";
                } else if ($_GET['pesan'] == "logout") {
                    echo "Anda telah berhasil logout";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "Anda harus login untuk mengakses halaman admin";
                } else if($_GET['pesan'] == "daftar_berhasil"){
                    echo "Pendaftaran akun baru berhasil, silahkan login!";
                }
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      body {
        background-image: url("berger.webp");
      }
    </style>
</head>

<body>
<center>
  <br><br><br>
  <img src="pig.png" alt="" height:="" 200px;="" style="
  width: 200px; ">
  <h2>Log In</h2>
  <form action="proses-login.php" method="post" enctype="multipart/formdata">
  <div class="col-sm-3">
    <label for="exampleInputEmail1" class="form-label"></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="col-sm-3">
    <label for="exampleInputPassword1" class="form-label"></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="col-sm-3"><br>
    <p>Don't have an account? <a href="register.php">Register</a></p>
  </div>
  <button type="submit" class="btn btn-primary col-sm-3">Login</button>
</form>
</center>

</body>
</html>