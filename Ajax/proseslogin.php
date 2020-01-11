<?php

  include 'koneksi.php';
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi, "SELECT data_user.username, data_user.password, fakultas.nm_fakultas, data_user.kode_fakultas FROM data_user, fakultas WHERE data_user.kode_fakultas=fakultas.kode_fakultas AND data_user.username='$username' AND data_user.password='$password'");
  $cek = mysqli_num_rows($login);

  if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);


      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      $_SESSION['nm_fakultas'] = $data['nm_fakultas'];

    if ($data['kode_fakultas'] == "0") {
      header("location:dashboard_admin.php");
    } else {
      header("location:dashboard_user.php");
    }
  }

 ?>
