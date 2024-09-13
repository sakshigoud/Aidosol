<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname ="aidosol";

  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if($conn){
    // echo "Connected successfully";
  }
  else{
  echo "connection failed: " . mysqli_connect_error();
  }
?>