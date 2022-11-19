<?php
    include 'koneksi.php';
    $nama = $_POST['yname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO user (yname, username, email, password, status)
    VALUES ('$yname', $username', '$email', '$password', 1)";
    $push = mysqli_query($connection, $query);

    if($push){
        header('location: index.php?pesan=daftar_berhasil');
    }else{
        header('location: register.php?pesan=daftar_gagal');
    }
?>