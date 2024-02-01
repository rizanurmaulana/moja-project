<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_moja_project";

$connect = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
  echo "Failed connection to database!";
  exit();
} 

?>