<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "test";

  $con = new mysqli($host, $user, $pass, $db);
  if($con->connect_error){
    echo "Seems like you have not configured the database. Failed To Connect to database:" . $con->connect_error;
  }
?>