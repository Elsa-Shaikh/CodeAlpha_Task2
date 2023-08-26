<?php
  session_start();

  $server = "localhost";
  $root = "root";
  $pass = "";
  $db = "crud";

  $conn = mysqli_connect($server,$root,$pass,$db);
  if(!$conn){
    echo "Connection Error! Kindly Check Your Data";
    }

?>