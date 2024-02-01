<?php

include '../koneksi.php';

if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $role = $_POST['role'];
  $password = $_POST['password'];

  $register = mysqli_query($connect, "INSERT INTO tb_user (name, email, phone_number, role, password) VALUES ('$name', '$email', '$phone_number', '$role', '$password')");

  if ($register) {
    header("location:./login.php");
  } else {
    echo "Registration failed: " . mysqli_error($connect);
  }
}
