<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "t2t";
  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if($conn){
    echo "Connection Established...!";
  }
  else{
    echo "Connection Unstablished...!";
  }
?>