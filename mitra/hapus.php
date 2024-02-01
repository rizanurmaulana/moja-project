<?php 

$job_title = urldecode($_GET['job_title']);
$company_name = urldecode($_GET['company_name']);
$company_location = urldecode($_GET['company_location']);

include '../koneksi.php';

$result = mysqli_query($connect, "DELETE FROM tb_add_job WHERE job_title = '$job_title' AND company_name = '$company_name' AND company_location = '$company_location'");

if ($result) {
    header("Location: ./job_list.php"); 
    exit();
} else {
    // Deletion failed
    echo "Error: " . mysqli_error($connect);
}


?>