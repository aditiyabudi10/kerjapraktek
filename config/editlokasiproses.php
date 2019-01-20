<?php

include 'koneksi.php';

	$id_penempatan        		= $_POST['id_penempatan'];
	$nama_tempat        		= $_POST['nama_tempat'];
    
	$edit 	= "UPDATE penempatan SET nama_tempat = '$nama_tempat' WHERE id_penempatan='$id_penempatan'";
	$editpenempatan	= mysqli_query($konek, $edit)or die(mysqli_error());

	if ($editpenempatan)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/home.php?konten=tambahpenempatan">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>