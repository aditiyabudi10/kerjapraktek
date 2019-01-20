<?php
	
	include 'koneksi.php';

	$id_karyawan	= $_POST["id_karyawan"];
	$tanggal		= $_POST["tanggal"];
	$bulan			= $_POST["bulan"];
	$level			= $_POST["level"];
	/*$keterangan		= $_POST["keterangan"];*/

      $cekdata="select id_karyawan, tanggal, bulan from absensi where id_karyawan='$id_karyawan'";
      $ada=mysqli_query($konek, $cekdata) or die(mysqli_error($konek));
      
      if($level=0){
      	if(mysqli_num_rows($ada)>0)
      	{ 
      	  echo '<script>alert("Anda Telah Absen Hari Ini");</script>';
      	  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/home.php">'; 
      	}
      	else
      	{
      	  $query="insert into absensi(id_absensi, id_karyawan, tanggal, bulan, keterangan) values('','$id_karyawan','$tanggal','$bulan','')";
      	  mysqli_query($konek, $query)or die(mysqli_error($konek));
      	  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/home.php">'; 
      	}	
      }
      elseif ($level=1) {
      	if(mysqli_num_rows($ada)>0)
      	{ 
      	  echo '<script>alert("Anda Telah Absen Hari Ini");</script>';
      	  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../manager/homemanager.php">'; 
      	}
      	else
      	{
      	  $query="insert into absensi(id_absensi, id_karyawan, tanggal, bulan, keterangan) values('','$id_karyawan','$tanggal','$bulan','')";
      	  mysqli_query($konek, $query)or die(mysqli_error($konek));
      	  echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../manager/homemanager.php">';
      	}
      }
      else{
      	if(mysqli_num_rows($ada)>0)
      { 
        echo '<script>alert("Anda Telah Absen Hari Ini");</script>';
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../karyawan/homekaryawan.php">'; 
      }
      else
      {
        $query="insert into absensi(id_absensi, id_karyawan, tanggal, bulan, keterangan) values('','$id_karyawan','$tanggal','$bulan','')";
        mysqli_query($konek, $query)or die(mysqli_error($konek));
        echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../karyawan/homekaryawan.php">'; 
      }
      }
      
?>