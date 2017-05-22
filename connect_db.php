<?php
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "data_kuliah";

  $connect = mysqli_connect($server, $user, $pass);

  if(!$connect){
    die('connection failed'.mysqli_connect_error());
  }
  mysqli_select_db($connect,$database);
 ?>
