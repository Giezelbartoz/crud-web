<?php
  require('connect_db.php');

  $sql = "SELECT * FROM matakuliah";
  $no = 1;
  $res = mysqli_query($connect,$sql);

  if(mysqli_num_rows($res) > 0) { ?>
  	<link rel="stylesheet" href="bootstrap.min.css">
  	<div class="container" style="margin-top: 40px">
      <h2>Aplikasi CRUD (Create, Read, Update,Delete)</h2>
      <h7>NB : isi data minimal harus 1 agar bisa menampilkan program</h7>
  		<table class="table" style="margin-top: 30px">
  			<tr>
  				<th>No</th>
  				<th>NRP</th>
  				<th>Nama</th>
  				<th>Jurusan</th>
  				<th>Mata Kuliah</th>
          <th>Jumlah SKS</th>
  			</tr>
  			<?php
  				while($row = mysqli_fetch_assoc($res)) {
  					echo "<tr>";
  						echo "<td>".$no."</td>";
  						echo "<td>".$row['nrp']."</td>";
  						echo "<td>".$row['nama']."</td>";
  						echo "<td>".$row['jurusan']."</td>";
  						echo "<td>".$row['matakuliah']."</td>";
              echo "<td>".$row['sks']."</td>";
  						echo '<td>
  							  <a class="btn btn-info" href="edit_form.php?id='.$row['nrp'].'">Edit</a>
  							  <a class="btn btn-danger" href="delete_exe.php?id='.$row['nrp'].'">Delete</a>
  							  </td>';
  					echo "</tr>";
  					$no++;
  				}
  			?>

  		</table>
        <a class="btn btn-warning" href="insert_form.php">
        <span class="glyphicon glyphicon-plus">Add Data</span></a>
  		<?php
  			// // hitung jumlah data
  			// $sql1 = "SELECT * FROM matakuliah";
  			// $res2 = mysqli_query($connect,$sql1);
  			// $jml_data = mysqli_num_rows($res2);
        //
  			// // Jumlah halaman
  			// $JmlHalaman = ceil($jml_data / $batas); // ceil digunakan untuk pembulatan keatas
        //
  			// // Navigasi ke sebelumnya
  			// if ( $pg > 1 ) {
  			// 	$link = $pg-1;
  			// 	$prev = "<a href='?pg=$link'>Sebelumnya </a>";
  			// } else {
  			// 	$prev = "Sebelumnya ";
  			// }
        //
  			// // Navigasi nomor
  			// $nmr = '';
  			// for ( $i = 1; $i<= $JmlHalaman; $i++ ){
  			// 	if ( $i == $pg ) {
  			// 		$nmr .= $i . " ";
  			// 	} else {
  			// 		$nmr .= "<a href='?pg=$i'>$i</a> ";
  			// 	}
  			// }
        //
  			// // Navigasi ke selanjutnya
  			// if ( $pg < $JmlHalaman ) {
  			// 	$link = $pg + 1;
  			// 	$next = " <a href='?pg=$link'>Selanjutnya</a>";
  			// } else {
  			// 	$next = " Selanjutnya";
  			// }
        //
  			// // Tampilkan navigasi
  			// echo $prev . $nmr . $next;
  		?>
  	</div>
  <?php
  }
  mysqli_close($connect);
?>
