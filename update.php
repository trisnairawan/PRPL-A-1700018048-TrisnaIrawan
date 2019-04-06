<!DOCTYPE html>
<html>
<head>
	<title>Update Data</title>
</head>
<style type ="text/css">
body {
	background:#66b2b2;
	
}
.box{
	background:#ffffff;
	padding-bottom: 40px;
	width:50%;
	padding-top: 40px;
}
</style>
<body>
	<?php
	include 'koneksi.php';

	$nomor_pc= $_GET['id'];

	$query = mysqli_query($koneksi,"SELECT * FROM prosesbayar where nomor_pc='$nomor_pc' ");
	while ($row = mysqli_fetch_array($query)) {
		# code...
		?>
		<CENTER>
  <h1>UPDATE DATA</h1>
  <div class="box">
<div class="form">
		<form method="POST" action="update1.php" >
			<table border="0" align="center">
				<tr>
					<td><input type="text" hidden="hidden" name="id" value="<?php echo $nomor_pc ?>"></td>
				</tr>
				<tr>

					<td>Nomor PC</td>
					<td>:</td>
						<td><input type="text" class="form-control"  name="nomor_pc" value="<?php echo $row['nomor_pc']?>">
					</td>
				</tr>
				<tr>
					<td>Nama Produk</td>
					<td>:</td>
						<td><select class="form-control" name="nama_produk" value="<?php echo$row['nama_produk']?>">
					<option value="LG">LG</option>
					<option value="Polytron">Polytron</option>
					<option value="Samsung">Samsung</option>
					<option value="Samsung">Acer</option>
					
				</select>
					</td>
				</tr>
				<tr>
					<td>ID Pelanggan</td>
					<td>:</td>
					<td> <select class="form-control" name="id_pelanggan" value="<?php echo$row['id_pelanggan']?>">
					<option value="101">Trisna Irawan</option>
					<option value="102">Binta Wahyu</option>
					<option value="103">Dimas Aji</option>
					<option value="104">Abi Fajar</option>
					<option value="105">Lalu Arfi</option>
					<option value="106">Dian Ramadhani</option>
					<option value="107">Tyo Idzhar</option></select>
					</td>
				</tr>
				<tr>
					<td>ID Karyawan</td>
					<td>:</td>
						<td><select class="form-control" name="id_karyawan" value="<?php echo$row['id_karyawan']?> ">
					<option value="001">001</option>
					<option value="002">002</option>
					<option value="003">003</option>
					<option value="004">004</option>
					<option value="005">005</option>
					<option value="006">006</option>
					<option value="007">007</option>
				</select>
					</td>
				</tr>
				<tr>
				<tr>
					<td>Date</td>
					<td> : </td>
					<td><input type="date" class="form-control" name="tanggal" value="<?php 
					echo $row['tanggal']?>"></td>
				</tr>
			</tr>
				<tr>
					<td>Waktu Bermain</td>
					<td>:</td>
						<td><input type="text" class="form-control" name="waktu_pemakain" value="<?php echo $row['waktu_pemakain']?>">
					</td>
				</tr>
				<tr>

					<tr>
				<td></td><center>
				<td colspan="2"><br><button type="submit" class="btn btn-primary" value="simpan">Simpan Perubahan</button><br><br>
					<a class="btn btn-success" href="edit.php">Kembali</a></td>
</center>
				</tr>
			</table>
		</form>
		</div>
		</div>
		<?php
	}
	?>
</body>
</html>