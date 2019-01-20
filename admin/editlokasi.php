<?php

error_reporting(0);

include '../config/koneksi.php';

$id_penempatan = $_GET['id_penempatan'];

$tampilkan  	= "SELECT id_penempatan, nama_tempat FROM penempatan WHERE id_penempatan = '$id_penempatan'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysqli_error($konek));
$data    		= mysqli_fetch_array($hasil);

?>
<br>
<form class="form-horizontal" action="../config/editlokasiproses.php" method="POST">
	<ol class="breadcrumb">
      <li class="active"><b>EDIT LOKASI PENEMPATAN</b></li>
       </ol>
    <input type="hidden" name="id_penempatan" value="<?php echo $id_penempatan ?>">
    <div class="form-group">
		<label class="col-sm-3">Lokasi Penempatan</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="nama_tempat" type="text" value="<?php echo $data['nama_tempat']; ?>"></label>
	</div>
	<div class="form-group">
     <label class="col-sm-3"></label>
     <label class="col-sm-1"></label>
     <div class="col-sm-8" align="Right">
     <button class="btn btn-success">Tambah</button>
    </div>
</form>