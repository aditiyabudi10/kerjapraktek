<br>
<form class="form-horizontal" action="../config/tambahakunproses.php" method="POST">
	 <ol class="breadcrumb">
        <li class="active"><b>DAFTAR AKUN BARU</b></li>
         </ol>

	<div class="form-group">
		<label class="col-sm-3">Nama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Karyawan"></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tempat Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Karyawan"></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Tanggal Lahir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
		<input class="form-control input-md" class="input-group date" name="tanggal_lahir" type="date" placeholder="Masukkan Tanggal Lahir Pegawai" required>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Jenis Kelamin</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option>Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
             </select> 
	</div>	
	<div class="form-group">
		<label class="col-sm-3">Agama</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="agama" name="agama" required>
                <option>Pilih Agama</option>
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
		<label class="col-sm-4"><input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat Karyawan"> </label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Posisi</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="posisi" name="posisi" required>
                <option>Pilih Posisi</option>
                <option value="0">Admin</option>
                <option value="1">Manager</option>
                <option value="2">Karyawan</option>
            </select>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Penempatan</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="penempatan" name="penempatan" required>
                <option>Pilih Penempatan</option>
                <option>Kantor Pusat</option>
                <option>Blok A</option>
                <option>Blok B</option>
                <option>Blok C</option>
                <option>Blok D</option>
                <option>Blok E</option>
            </select>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Username</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="text" name="username" placeholder="Masukkan Username Karyawan"> </label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Password</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" type="password" name="password" placeholder="Masukkan Password Karyawan"> </label>
	</div>
	<div class="form-group">
        <label class="col-sm-3"></label>
        <label class="col-sm-1"></label>
        <div class="col-sm-8" align="Right">
          <button class="btn btn-danger">Tambah</button>
         </div>
    </div>
		
		