<?php

	include 'koneksi.php';

	$nama_tempat							= $_POST["nama_tempat"];

	$tambah	= "INSERT INTO penempatan VALUES ('', '$nama_tempat')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/home.php?konten=tambahpenempatan">';  
}
else
 {
 	echo 'GAGAL';
 }

?>