<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../bootstrap/css/sb-admin.css" rel="stylesheet">
  <script src="jquery-3.3.1.min.js"></script>

</head>
<body onload="window.print()">


<center>
	<img src="../gambar/logobm.png" alt="Girl in a jacket" style="width:200px;height:200px;">
</center>
<br>
<center>
	<h1>TABLE DATA KARYAWAN</h1>
</center>
<br>
<div class="panel panel-default"">
<table class="table table-bordered" id="" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama Karyawan</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Posisi</th>
            <th>Penempatan</th>
          </tr>
        </thead>
        <tfoot>

        <?php

      include '../config/koneksi.php';

      $query = mysqli_query($konek, "SELECT * FROM karyawan")or die(mysqli_error());
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                  echo '<tr>';
                  echo '<td>'.$no.'</td>';
                  echo '<td>'.$data['nama_karyawan'].'</td>';
                  echo '<td>'.$data['tempat_lahir'].'</td>';
                  echo '<td>'.$data['tanggal_lahir'].'</td>';
                  echo '<td>'.$data['jenis_kelamin'].'</td>';
                  echo '<td>'.$data['agama'].'</td>';
                  echo '<td>'.$data['alamat'].'</td>';
                  if ($data['posisi']==0) {
                    echo '<td>Admin</td>';
                  }
                  elseif ($data['posisi']==1) {
                    echo '<td>Manager</td>';
                  }
                  else {
                    echo '<td>Karyawan</td>';
                  }
                  echo '<td>'.$data['penempatan'].'</td>';
                  $no++;  
                }
              }
        
          ?>

        </tbody>
      </table>

 </title>
</body>
</html>