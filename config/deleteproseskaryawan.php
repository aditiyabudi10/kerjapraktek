<?php

	include 'koneksi.php';

	$id_karyawan = $_GET ['id_karyawan'];

	$hapus 	 = "DELETE FROM karyawan WHERE id_karyawan='$id_karyawan'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../home.php?konten=datakaryawan'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Tidak Berhasil Dihapus!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>