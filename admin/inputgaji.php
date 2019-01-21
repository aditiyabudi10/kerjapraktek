 <div class="container-fluid">
 
     <a href="#"><i class="fa fa-dashboard"></i> Gaji &nbsp;</a>Input Gaji Karyawan
 <hr />

  <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             Untuk Input gaji silahkan klik nama karyawan atau tombol di samping kanan.!!
          </div> <hr />

 <div class="card">
  <div class="card-header bg-danger text-white"><b>Input Gaji Karyawan CV.Bangkit Mandiri</b></div>
  <div class="card-body">

  	 <table class="table table-bordered">
    <thead>
      <tr>
         <th><center>No<center></th>
         <th><center>Nama<center></th>
         <th><center>Penempatan<center></th>
         <th><center>Posisi<center></th>
         <th><center>Aksi<center></th>
      </tr>
    </thead>
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
                  echo '<td><center>'.$no.'</center></td>';
                  echo '<td>'.$data['nama_karyawan'].'</td>';
                  echo '<td>'.$data['penempatan'].'</td>';
                  echo '<td>'.$data['posisi'].'</td>';
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Input Gaji" href=home.php?konten=input-gaji&&id_karyawan='.$data['id_karyawan'].'&&posisi='.$data['posisi'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                   $no++;  
                }
              }
            ?>
    <tbody>
    </tbody>
  </table>

  	
  </div> 
 
</div>

 </div>