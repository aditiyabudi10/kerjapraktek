<?php

	error_reporting(0);
	
	include 'koneksi.php';

	$id_karyawan	= $_POST["id_karyawan"];
	$tanggal		= $_POST["tanggal"];
	$bulan			= $_POST["bulan"];
	$keterangan		= $_POST["keterangan"];

	$insert			= "INSERT INTO absensi VALUES ('','$id_karyawan','$tanggal','$bulan','$keterangan')";

	$simpan			= mysqli_query($konek, $insert)or die(mysqli_error($konek));

	echo "<br><br><br><strong><center><i>Anda berhasil absen!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/home.php">';  

?>
