<?php

include '../koneksi.php';

$job_title = urldecode($_GET['job_title']);

var_dump($job_title); die;

if (isset($_POST['submit'])) {
  $job_title_post = $_POST['job_title'];
  $job_type = $_POST['job_type'];
  $job_experience = $_POST['job_experience'];
  $company_name = $_POST['company_name'];
  $company_location = $_POST['company_location'];
  $company_description = $_POST['company_description'];
  $job_description = $_POST['job_description'];
  $job_requirements = $_POST['job_requirements'];
  $benefits = $_POST['benefits'];
  $posting_date = date('Y-m-d');
  $last_apply = $_POST['last_apply'];
  $company_logo = $_FILES['company_logo'];

  if (isset($company_logo) && $company_logo["error"] == 0) {
    $fileSize = $company_logo["size"];

    if ($fileSize == 0) {
      echo "<script>alert('Berkas Harus Diisi. Silahkan Ulangi');</script>";
    } else {
      $uploadDir = "./uploads/";
      if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
      }
      $fileName = $company_logo['name'];
      $newFileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . '.' . pathinfo($fileName, PATHINFO_EXTENSION);
      $destination = $uploadDir . $newFileName;

      if (move_uploaded_file($company_logo['tmp_name'], $destination)) {
        $query = "UPDATE tb_add_job 
                  SET 
                      job_title = '$job_title_post', 
                      job_type = '$job_type', 
                      job_experience = '$job_experience', 
                      company_name = '$company_name', 
                      company_location = '$company_location', 
                      company_description = '$company_description', 
                      job_description = '$job_description', 
                      job_requirements = '$job_requirements', 
                      benefits = '$benefits', 
                      posting_date = '$posting_date', 
                      last_apply = '$last_apply', 
                      company_logo = '$newFileName' 
                  WHERE 
                      job_title = '$job_title'";

        $result = mysqli_query($connect, $query);

        if ($result) {
          header("location:./job_list.php");
          exit;
        } else {
          echo "Registration failed: " . mysqli_error($connect);
        }
      } else {
        echo "Terjadi kesalahan saat mengunggah file.";
      }
    }
  } else {
    echo "Error: " . $company_logo["error"];
  }
}
