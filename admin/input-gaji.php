 <div class="container-fluid">


<?php

include '../config/koneksi.php';

$id_karyawan = $_GET['id_karyawan'];
$posisi = $_GET['posisi'];

$tampilkan  	= "SELECT * FROM karyawan WHERE id_karyawan = '$id_karyawan'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);

// die(var_dump($data));



$hadir          =  "SELECT COUNT(keterangan) as hadir FROM absensi where keterangan = 'Hadir' AND id_karyawan = '$id_karyawan'";
$hasil1   		= mysqli_query($konek, $hadir)or die(mysql_error());
$data1    		= mysqli_fetch_array($hasil1);

//die(var_dump($data1));

$sakit          =  "SELECT COUNT(keterangan) as sakit FROM absensi where keterangan = 'Sakit' AND id_karyawan = '$id_karyawan'";
$hasil2   		= mysqli_query($konek, $sakit)or die(mysql_error());
$data2   		= mysqli_fetch_array($hasil2);

// die(var_dump($data3));

$cuti          =  "SELECT COUNT(keterangan) as cuti FROM absensi where keterangan = 'Cuti' AND id_karyawan = '$id_karyawan'";
$hasil3   		= mysqli_query($konek, $cuti)or die(mysql_error());
$data3   		= mysqli_fetch_array($hasil3);


$gajipokok          =  "SELECT * FROM gaji where posisi = '$posisi'";
$hasil4   		= mysqli_query($konek, $gajipokok)or die(mysql_error());
$data4   		= mysqli_fetch_array($hasil4);
// die(var_dump($data4));

?>

<script><!--
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
one = document.autoSumForm.absen.value;
two = document.autoSumForm.gajipokok.value;
document.autoSumForm.um1.value = (one*15000);
document.autoSumForm.ut1.value = (one*20000);
totalgaji = ((two/22)*one + (one*15000) + (one*20000));
document.autoSumForm.total.value = Math.floor(totalgaji);}
function stopCalc(){
clearInterval(interval);}
</script>

<br>

<ol class="breadcrumb">
      <li class="active"><b>Inputkan Gaji Karyawan pada form dibawah ini !</b></li>
       </ol>
   <hr />

<div class="card">
  <div class="card-header">Input Gaji Karyawan CV.Bangkit Mandiri</div>
  <div class="card-body">
<form class="form-horizontal" name='autoSumForm' action="config/editkaryawanproses.php" method="POST">
    <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan ?>">
	<div class="form-group">
		<label class="col-sm-3">Nama Karyawan</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-7"><input class="form-control" name="nama" type="text" value="<?php echo $data['nama_karyawan']; ?>" readonly></label>
	</div>
	<div class="form-group">
		<label class="col-sm-3">Posisi</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-7"><input class="form-control" name="nama" type="text" value="<?php echo $data['posisi']; ?>" readonly></label>
	</div>

	<div class="form-group">
		<label class="col-sm-3">Gaji Bulan</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="gb" name="gb">
                <option> --Gaji Bulan--  </option>
                <option> Januari </option>
                <option> Februari </option>
                 <option> Maret  </option>
                  <option> April </option>
                   <option> Mei </option>
                    <option> Juni </option>
                     <option> Juli </option>
                      <option> Agustus </option>
                       <option> September </option>
                        <option> Oktober </option>
                         <option> November </option>
                          <option> Desember </option>
              
             </select> 
	</div>

	<div class="form-group">
		<label class="col-sm-3">Gaji Tahun</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4">
			<select class="form-control" id="gt" name="gt">
                <option> --Gaji Tahun--  </option>
                <option> 2019 </option>
                <option> 2020 </option>
                 <option> 2021  </option>
                  <option> 2022 </option>
                   <option> 2023 </option>
             </select> 
	</div>

	<div class="form-group">
		<label class="col-sm-3">Tanggal Transfer</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-7"><input class="form-control" name="tgl" type="date"></label>
	</div>

	<div class="form-group">
		<label class="col-sm-3">Hadir</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-7"><input class="form-control" name="absen" type="text" onFocus="startCalc();" onBlur="stopCalc();"></label>
	</div>

	<div class="form-group">
		<label class="col-sm-3">Sakit</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-7"><input class="form-control" name="sakit" type="text" value="<?php echo $data2['sakit']; ?>" readonly></label>
	</div>

	<div class="form-group">
		<label class="col-sm-3">Cuti</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-7"><input class="form-control" name="cuti" type="text" value="<?php echo $data3['cuti']; ?>" readonly></label>
	</div>
<div class="form-group">
		<label class="col-sm-3">No Rekening</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-7"><input class="form-control" name="norek" type="text" placeholder="Masukkan Nomor Rekening" required></label>
	</div>

	<div class="form-group">
		<label class="col-sm-3">Gaji Pokok</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-7"><input class="form-control" name="gajipokok" type="text" value="<?php echo $data4['gaji_pokok']; ?>"  onFocus="startCalc();" onBlur="stopCalc();" readonly></label>
	</div>

	<div class="form-group">
		<label class="col-sm-3">Uang Makan</label>
		<label class="col-sm-1">:</label>

		<label class="col-sm-3"><input class="form-control" name="um" type="text" value="<?php echo $data4['uang_makan']; ?>" readonly></label> 

		<label class="col-sm-3"><input class="form-control" name="um1" type="text" readonly></label> 

	</div>

	<div class="form-group">
		<label class="col-sm-3">Uang Transport</label>
		<label class="col-sm-1">:</label>

		<label class="col-sm-3"><input class="form-control" name="ut" type="text" value="<?php echo $data4['transport']; ?>" readonly></label> 

		<label class="col-sm-3"><input class="form-control" name="ut1" type="text" readonly></label> 

	</div>

<div class="form-group">
		<label class="col-sm-3">Total Gaji</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-7"><input class="form-control" name="total" type="text" readonly></label>
	</div>

<button type="submit" class="btn btn-primary">Simpan Data Gaji</button>
<button type="submit" class="btn btn-danger"> Batal </button>

</form>
</div>
</div>
<br><br>



 </div>