<?php
  require('connect_db.php');

  $nrp = $_POST['nrp'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $matakuliah = $_POST['matakuliah'];
  $sks = $_POST['sks'];

  $query = "UPDATE matakuliah SET
      nama='$nama',
      jurusan='$jurusan',
      matakuliah='$matakuliah',
      sks='$sks'
      WHERE nrp='$nrp'";
  $que = mysqli_query($connect,$query);
  header('location:main.php');
 ?>
