<div class="container-fluid">

     <div class="alert alert-danger">
  <strong>Data Gaji Karyawan</strong> CV.Bangkit Mandiri
</div> <hr />

 <div class="card ">
  <div class="card-header bg-info text-white">Data Gaji Karyawan</div>
  <div class="card-body">
  	 <table class="table table-bordered">
    <thead>
      <tr>
        <th><center>No<center></th>
        <th><center>NIK<center></th>
        <th><center>Bulan<center></th>
        <th><center>Tahun<center></th>
        <th><center>Transfer<center></th>
        <th><center>Total Gaji<center></th>
        <th colspan="3"><center>Aksi<center></th>

       
      </tr>
    </thead>
    <tbody>

    	<?php
    	 include '../config/koneksi.php';

        $query = mysqli_query($konek, "SELECT * FROM gaji_bulanan")or die(mysqli_error($konek));
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="12" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;   
                while($data = mysqli_fetch_array($query)){  
                  echo '<tr>';
                  echo '<td>'.$no.'</td>';
                  echo '<td>'.$data['NIK'].'</td>';
                  echo '<td>'.$data['gaji_bulanan'].'</td>';
                  echo '<td>'.$data['gaji_tahun'].'</td>';
                  echo '<td>'.$data['tgl_transfer'].'</td>';
                  echo '<td>'.$data['total'].'</td>';
                 echo '<td  width="20"><a class="btn btn-sm btn-warning" data-placement="bottom" data-toggle="tooltip" title="Cetak Gaji" href=""><span class="glyphicon glyphicon-print"></span></a></td>';
                  echo '<td  width="20"> <a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Gaji" href=""><span class="glyphicon glyphicon-edit"></span></a>  </td>';
                   echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deleteproseskaryawan.php?id_karyawan='.$data['id_karyawan'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                  $no++;  
                }
              }     



    	?>
      
      
      </tr>
    </tbody>
  </table>


 <a href="home.php?konten=inputgaji" class="btn btn-sm btn-danger ">Input Gaji Karyawan &raquo;</a>
 </div> 
  
</div>


</div>
