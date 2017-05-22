<?php
  require('connect_db.php');

  $x = $_GET['id'];

  $query = "DELETE FROM matakuliah WHERE nrp='$x'";
  $que = mysqli_query($connect,$query);
  header('location:main.php');
 ?>
