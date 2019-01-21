<?php

	include 'koneksi.php';

    $id_karyawan        = $_POST['id_karyawan'];
    $nama_karyawan      = $_POST['nama_karyawan'];
    $tempat_lahir       = $_POST['tempat_lahir'];
    $tanggal_lahir      = $_POST['tanggal_lahir'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $agama              = $_POST['agama'];
    $posisi             = $_POST['posisi'];
    $penempatan         = $_POST['penempatan'];


    $update     = "UPDATE karyawan SET id_karyawan='$id_karyawan', nama_karyawan='$nama_karyawan', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' , jenis_kelamin ='$jenis_kelamin', agama = '$agama', posisi ='$posisi', penempatan ='$penempatan' WHERE id_karyawan='$id_karyawan'";

	$update	= mysqli_query($konek, $update)or die(mysqli_error($konek));

	if ($update)
        {
            echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
            echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../admin/home.php?konten=datakaryawan">';
        }
    else {
            print"
                <script>
                    alert(\"Maaf, Data tidak berhasil diubah!\");
                    history.back(-1);
                </script>";
        }
?>