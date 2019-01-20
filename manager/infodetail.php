<?php

error_reporting(0);

include '../config/koneksi.php';


$id_karyawan	= $_GET['id_karyawan'];

$tampilkan    = "SELECT id_karyawan, nama_karyawan, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, posisi, penempatan FROM karyawan WHERE id_karyawan = '$id_karyawan'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);

?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Profil Karyawan </a>
  </li>
</ol>
<div class="card mb-3">
  <div class="card-header">
   	<i class="fa fa-table"></i> Profil Karyawan </div>
     <div class="card-body">
      <div class="form-group">
    </div>


<table class="table table-striped-bordered">
    <tr>
      <td width="200">Nama Karyawan</td>
      <td width="50">:</td>
      <td><?php echo $data['nama_karyawan']; ?></td>
    </tr>
    <tr>
      <td width="200">Tempat Lahir</td>
      <td width="50">:</td>
      <td><?php echo $data['tempat_lahir']; ?></td>
    </tr>
    <tr>
      <td width="200">Tanggal Lahir</td>
      <td width="50">:</td>
      <td><?php echo $data['tanggal_lahir']; ?></td>
    </tr>
    <tr>
      <td width="200">Jenis Kelamin</td>
      <td width="50">:</td>
      <td><?php echo $data['jenis_kelamin']; ?></td>
    </tr>
    <tr>
      <td width="200">Agama</td>
      <td width="50">:</td>
      <td><?php echo $data['agama']; ?></td>
    </tr>
    <tr>
      <td width="200">Alamat</td>
      <td width="50">:</td>
      <td><?php echo $data['alamat']; ?></td>
    </tr>
    <tr>
      <td width="200">Posisi</td>
      <td width="50">:</td>
      <td><?php echo $data['posisi']; ?></td>
    </tr>
    <tr>
      <td width="200">Penempatan</td>
      <td width="50">:</td>
      <td><?php echo $data['penempatan']; ?></td>
    </tr>
  <?php 
  $no++;
  ?>
  </table>
</div>
</div>
