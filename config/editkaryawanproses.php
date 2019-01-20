 <?php

	include 'koneksi.php';
    $id_karyawan            = $_POST['id_karyawan'];
    $nama                   = $_POST["nama"];
    $tempat_lahir           = $_POST["tempat_lahir"];
    $tanggal_lahir          = $_POST["tanggal_lahir"];
    $jenis_kelamin          = $_POST["jenis_kelamin"];
    $agama                  = $_POST["agama"];
    $alamat                 = $_POST["alamat"];
    $posisi                 = $_POST["posisi"];
    $penempatan             = $_POST["penempatan"];
    $username               = $_POST["username"];
    $password               = md5($_POST['password']);
    


	$edit = "UPDATE karyawan SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', alamat='$alamat', posisi='$posisi',penempatan='$penempatan', username='$username', password='$password' WHERE id_karyawan='$id_karyawan'";
	$editakun	= mysqli_query($konek, $edit)or die(mysqli_error());

	if ($editakun)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=datakaryawan">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>