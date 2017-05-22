<link rel="stylesheet" href="bootstrap.min.css">

<div class="container">
	<h2>Insert Data Mahasiswa</h2>
	<form class="form-horizontal pull-left" method="post" action="insert_exe.php" style="margin-top: 20px">
		<div class="form-body">

      <div class="form-group">
				<label class="control-label col-md-3">NRP</label>
				<div class="col-md-10">
					<input type="text" name="nrp" class="form-control">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-3">Nama</label>
				<div class="col-md-10">
					<input type="text" name="nama" class="form-control">
				</div>
			</div>

      <div class="form-group">
				<label class="control-label col-md-3">Jurusan</label>
				<div class="col-md-10">
					<input type="text" name="jurusan" class="form-control">
				</div>
			</div>

      <div class="form-group">
				<label class="control-label col-md-3">Matakuliah</label>
				<div class="col-md-10">
					<input type="text" name="matakuliah" class="form-control">
				</div>
			</div>

      <div class="form-group">
				<label class="control-label col-md-4">Jumlah SKS</label>
				<div class="col-md-10">
					<input type="text" name="sks" class="form-control">
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
