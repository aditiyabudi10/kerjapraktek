<?php

error_reporting(0);

include 'config/koneksi.php';

$id_karyawan = $_GET['id_karyawan'];

$tampilkan  	= "SELECT * FROM karyawan WHERE id_karyawan = '$id_karyawan'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);


?>
<br>
<form class="form-horizontal" action="../config/editkaryawanproses.php" method="POST">
	<ol class="breadcrumb">
      <li class="active"><b>EDIT AKUN PEGAWAI</b></li>
       </ol>
    <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan ?>">
	<div class="form-group">
		<label class="col-sm-3">Nama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="nama_karyawan" type="text" value="<?php echo $data['nama_karyawan']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tempat Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="tempat_lahir" type="text" value="<?php echo $data['tempat_lahir']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tanggal Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
		<input class="form-control input-md" class="input-group date" name="tanggal_lahir" type="date" value="<?php echo $data['tanggal_lahir']; ?>"required>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Jenis Kelamin</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option><?php echo $data['jenis_kelamin'];?></option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select> 
	</div>
	<div class="form-group">
		<label class="col-sm-3">Agama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="agama" name="agama" required>
                <option><?php echo $data['agama'];?></option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Kong Hu Cu</option>
            </select>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Alamat</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="alamat" type="text" value="<?php echo $data['alamat']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Posisi</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="posisi" type="text" value="<?php echo $data['posisi']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Penempatan</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="penempatan" name="penempatan" required>
                <option><?php echo $data['penempatan'];?></option>
                <option>Kantor Pusat</option>
                <option>Blok A</option>
                <option>Blok B</option>
                <option>Blok C</option>
                <option>Blok D</option>
                <option>Blok E</option>
            </select>
	</div>
	<!-- <div class="form-group">
		<label class="col-sm-3">Username</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="username" type="text" value="<?php echo $data['username']; ?>" required></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Password</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="password" type="password" value="<?php echo $data['password']; ?>" required></label>
	</div> -->
	<div class="form-group">
        <label class="col-sm-3"></label>
        <label class="col-sm-1"></label>
        <div class="col-sm-8" align="Right">
          <button class="btn btn-primary">Edit</button>

         </div>
    </div>