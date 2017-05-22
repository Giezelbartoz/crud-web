<?php
  require('connect_db.php');

  $nrp = $_POST['nrp'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $matakuliah = $_POST['matakuliah'];
  $sks = $_POST['sks'];

  $query = "INSERT INTO matakuliah VALUES('$nrp','$nama','$jurusan','$matakuliah','$sks')";
  $que = mysqli_query($connect,$query);
  header('location:main.php');
?>
