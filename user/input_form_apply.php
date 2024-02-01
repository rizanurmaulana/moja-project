<?php

include '../koneksi.php';

if ($_POST['submit']) {
  $name = $_POST['name'];
  $job_title = $_POST['job_title'];
  $company_name = $_POST['company_name'];
  $company_location = $_POST['company_location'];
  $job_type = $_POST['job_type'];
  $birth_date = $_POST['birth_date'];
  $address = $_POST['address'];
  $subdistrict = $_POST['subdistrict'];
  $city = $_POST['city'];
  $province = $_POST['province'];
  $postal_code = $_POST['postal_code'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $resume = $_FILES['resume'];

  if (isset($resume) && $resume["error"] == 0) {
    $fileSize = $resume["size"];

    if ($fileSize == 0) {
      echo "<script>alert('Berkas Harus Diisi. Silahkan Ulangi');</script>";
    } else {
      $uploadDir = "./uploads/";
      if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
      }
      $fileName = $resume['name'];
      $newFileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . '.' . pathinfo($fileName, PATHINFO_EXTENSION);
      $destination = $uploadDir . $newFileName;
      if (move_uploaded_file($resume['tmp_name'], $destination)) {
        $query = "INSERT INTO tb_form_apply (name, job_title, company_name, company_location, job_type, birth_date, address, subdistrict, city, province, postal_code, email, phone_number, status, resume) VALUES ('$name', '$job_title', '$company_name', '$company_location', '$job_type', '$birth_date', '$address', '$subdistrict', '$city', '$province', '$postal_code', '$email', '$phone_number', 'not_verified', '$newFileName')";
        $result = mysqli_query($connect, $query);

        if ($result) {
          header("location:./application_status.php");
          exit;
        } else {
          echo "Registration failed: " . mysqli_error($connect);
        }
      } else {
        echo "Terjadi kesalahan saat mengunggah file.";
      }
    }
  } else {
    echo "Error: " . $resume["error"];
  }
}
