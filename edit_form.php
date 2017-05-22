<?php
  require('connect_db.php');
  $id = isset($_GET['id']) ? $_GET['id'] : '';
  $sql = mysqli_query($connect,"SELECT * FROM matakuliah WHERE nrp='$id'");
  $row = mysqli_fetch_array($sql);
?>
  <link rel="stylesheet" href="bootstrap.min.css">
  <div class="container">
    <h2>Edit Data Mahasiswa</h2>
    <form class="form-horizontal pull-left" method="post" action="edit_exe.php" style="margin-top:30px">
      <div class="form-body">

        <div class = "form-group">
          <label class="control-label col-md-3">NRP</label>
  				<div class="col-md-10">
  					<input type="text" name="nrp" class="form-control" value="<?php echo $id ?>">
  				</div>
  			</div>

  			<div class="form-group">
  				<label class="control-label col-md-3">Nama</label>
  				<div class="col-md-10">
  					<input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ?>">
  				</div>
  			</div>

        <div class="form-group">
  				<label class="control-label col-md-3">Jurusan</label>
  				<div class="col-md-10">
  					<input type="text" name="jurusan" class="form-control" value="<?php echo $row['jurusan'] ?>">
  				</div>
  			</div>

        <div class="form-group">
  				<label class="control-label col-md-3">Matakuliah</label>
  				<div class="col-md-10">
  					<input type="text" name="matakuliah" class="form-control" value="<?php echo $row['matakuliah'] ?>">
  				</div>
  			</div>

        <div class="form-group">
  				<label class="control-label col-md-4">Jumlah SKS</label>
  				<div class="col-md-10">
  					<input type="text" name="sks" class="form-control" value="<?php echo $row['sks'] ?>">
  				</div>
  			</div>
        <br>

        <div class="form-group">
  				<div class="col-md-3">
  					<button class="btn btn-success" type="submit">Save</button>
          </div>
      </div>
  </div>
</form>
</div>
