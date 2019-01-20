<?php

	include 'koneksi.php';

	$nama					= $_POST["nama"];
	$tempat_lahir			= $_POST["tempat_lahir"];
	$tanggal_lahir			= $_POST["tanggal_lahir"];
	$jenis_kelamin			= $_POST["jenis_kelamin"];
	$agama					= $_POST["agama"];
	$alamat					= $_POST["alamat"];
	$posisi					= $_POST["posisi"];
	$penempatan				= $_POST["penempatan"];
	$username				= $_POST["username"];
	$password 				= md5($_POST['password']);
	



	$tambah	= "INSERT INTO karyawan VALUES ('', '$nama', '$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama', '$alamat','$posisi', '$penempatan','$username', '$password')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=datakaryawan">';  
}
else
 {
 
 	echo 'GAGAL';
 }

?>