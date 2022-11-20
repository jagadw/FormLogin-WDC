<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
    <style>
      body {
        background-image: url("berger.webp");
      }
    </style>
</head>
<body>
    <center>
<img src="pig.png" alt="" height="200px" width="200px">
        <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "Email yang anda masukkan tidak ada!";
                } else if($_GET['pesan'] == "password"){
                    echo "Password tidak sama silahkan ulangi lagi!";
                }
            }
        ?>
        <div class="login-box-body">
            <p class="login-box-msg">Recovery Password</p>

            <form action="proses-forgot-password.php" method="POST" enctype="multipart/form-data">
                <div class="col-sm-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div><br>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="New Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div><br>
                <div class="col-sm-3">
                    <input type="text" class="form-control" placeholder="Retype Password" name="re_password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div><br>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.php" class="btn btn-default btn-block btn-flat">Back</a>
                    </div>
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Change</button>
                    </div>
                </div>
        </div>
                </center>
            </form>
</body>
</html>