<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Data Karyawan</a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i>  Input Data Karyawan</div>
    <div class="table-responsive"><br>
      <div class="col-sm-1" align="Right">
         <a href="home.php?konten=tambahakun"> <button class="btn btn-success">Tambah Karyawan</button></a>
      </div>
      <br>
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
            <th colspan="3"><center>Aksi</center></th>
          </tr>
        </thead>
        <tfoot>

        <?php

      include 'config/koneksi.php';

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
                  echo '<td>'.$data['nama'].'</td>';
                  echo '<td>'.$data['tempat_lahir'].'</td>';
                  echo '<td>'.$data['tanggal_lahir'].'</td>';
                  echo '<td>'.$data['jenis_kelamin'].'</td>';
                  echo '<td>'.$data['agama'].'</td>';
                  echo '<td>'.$data['alamat'].'</td>';
                  echo '<td>'.$data['posisi'].'</td>';
                  echo '<td>'.$data['penempatan'].'</td>';
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=home.php?konten=editkaryawan&&id_karyawan='.$data['id_karyawan'].'><i class="fa fa-edit fa-fw"></i></a></td>';
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deleteproseskaryawan.php?id_karyawan='.$data['id_karyawan'].'><i class="fa fa-trash fa-fw"></i></a></td>';
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Detail" href=home.php?konten=infodetail&&id_karyawan='.$data['id_karyawan'].'><i class="fa fa-info fa-fw"></i></a></td>';
                  $no++;  
                }
              }
        
          ?>

        </tbody>
      </table>
      <a href="cetakpegawai.php" target="_BLANK" role="button" class="btn btn-primary pull-right" style="margin-right:16px;margin-bottom:10px;width:150px"><span class="fa fa-print"></span> Cetak Report</a>
    </div>
  </div>