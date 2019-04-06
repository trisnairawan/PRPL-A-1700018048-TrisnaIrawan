<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
		
		$nomor_pc = $_POST['nomor_pc'];
		$nama_produk = $_POST['nama_produk'];
		$id_pelanggan = $_POST['id_pelanggan'];
		$id_karyawan = $_POST['id_karyawan'];
		$tanggal = $_POST['tanggal'];
		$waktu_pemakain = $_POST['waktu_pemakain'];
				$harga = 0;
		$harga = $waktu_pemakain*5000;
// query SQL untuk insert data
$query=mysqli_query($koneksi,"UPDATE prosesbayar SET nomor_pc='$nomor_pc', nama_produk='$nama_produk',id_pelanggan='$id_pelanggan',id_karyawan='$id_karyawan',
tanggal='$tanggal',waktu_pemakain='$waktu_pemakain',harga='$harga'");
if ($query) {
header('location:edit.php');
}else{
echo "Gagal menyimpan data";
}
?>