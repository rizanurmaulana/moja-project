<?php
session_start();

include '../koneksi.php';

if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $login = mysqli_query($connect, "SELECT * FROM tb_user 
  WHERE email='$email' and password='$password'");

  $check = mysqli_num_rows($login);
  if ($check > 0) {
    $data = mysqli_fetch_assoc($login);
    switch ($data['role']) {
      case 'admin':
        $_SESSION['email'] = $email;
        $_SESSION['role'] = 'admin';
        header("location:../admin/dashboard.php");
        break;

      case 'user':
        $_SESSION['email'] = $email;
        $_SESSION['role'] = 'user';
        header("location:../user/dashboard.php");
        break;

      case 'mitra':
        $_SESSION['email'] = $email;
        $_SESSION['role'] = 'mitra';
        header("location:../mitra/dashboard.php");
        break;

      default:
        header("location:login.php?pesan=gagal");
    }
  } else {
    header("location:login.php?pesan=gagal");
  }
}
