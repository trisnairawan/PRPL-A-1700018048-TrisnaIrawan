<!DOCTYPE html>
<html lang="en">
<head>
	<title>tampil data</title>
</head>
<style type ="text/css">
body {
	background:#66b2b2;
	
}
</style>
<body>
<center>
<h1>TAMPILAN DATA</h1>
<tr></tr>
</form>
	<div class="table-responsive">
	<table border="1" >
		 <thead>
		<tr >
			<th >Nomor PC</th>
			<th >Nama Produk</th>
			<th >ID Pelanggan</th>
			<th >ID Karyawan</th>
			<th >Date</th>
			<th >Waktu Pemakaian</th>
			<th >Harga</th>
			<th >Tools</th>
			</tr>
	
		</thead>

	<?php
		include 'koneksi.php';
		$query = mysqli_query($koneksi,"SELECT * FROM prosesbayar");
		while ($row = mysqli_fetch_array($query)) {
		?>
		 <tbody>
		<tr > 
			<td ><?php echo $row['nomor_pc'];?></td><!--namaatribut-->
			<td ><?php echo $row['nama_produk'];?></td>
			<td ><?php echo $row['id_pelanggan'];?></td>
			<td ><?php echo $row['id_karyawan'];?></td>
			<td ><?php echo $row['tanggal'];?></td>
			<td ><?php echo $row['waktu_pemakain']." Jam";?></td>
			<td ><?php echo "Rp."." ". $row['harga'];?></td>
				<td >
			<a href="update.php?id=<?php echo $row['nomor_pc']; ?>" >Update</a> ||

			<a href="delete.php?id=<?php echo $row['nomor_pc']; ?> ">Delete</a>
</td>
			</tr>
			 </tbody>
				
	<?php

	}
	?>
	</table>
	<br>  
</center>
</body>
</html>