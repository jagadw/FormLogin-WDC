<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
      body {
        background-image: url("berger.webp");
      }
    </style>
  </head>
<body>
    <center><br><br><br>
    <form action="proses-register.php" method="post">
        <h1>Sign Up</h1>
        <div class="col-sm-3">
          <label for="formGroupExampleInput" class="form-label"></label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Yourname" name="nama">
        </div>
        <div class="col-sm-3">
          <label for="formGroupExampleInput" class="form-label"></label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="username">
        </div>
        <div class="col-sm-3">
          <label for="exampleInputEmail1" class="form-label"></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email">
          <div id="emailHelp" class="form-text" name="email">We'll never share your email with anyone else.</div>
        </div>
          <label for="inputPassword5" class="form-label"></label>
        <div class="col-sm-3">
          <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Set Password" name="password">
        </div>
        <div id="passwordHelpBlock" class="form-text">
          Your password must be 8-20 characters.
        </div><br>
        <div>
            <button type="submit" class="btn btn-primary col-sm-3">Register</button>
        </div>
        </center>
    </form>
</body>
</html
