<?php
    
    $month = date('M');
    $years = date('Y');
    $day   = date('d');

    $id_karyawan = $_SESSION['id_karyawan'];
    $level       = $_SESSION['level'];

?>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Beranda</a>
  </li>
</ol>
<div class="card-body">
    <br>
    <br>
    <br>
    <br>
    <br>
     <h4><p style="text-align:center">Anda Berhasil login sebagai MANAGER</p></h4>
    <?php
    include '../config/koneksi.php';
    echo "<h3 align='center'>SELAMAT DATANG ".$_SESSION['username']."</h3>";
    // echo $level;


    ?>
    <h4><p style="text-align:center"></p></h4>
    <br>
    <p align="center">
      <form action="../config/proses_absen.php" method="POST">
        <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan ?>">
        <input type="hidden" name="level" value="<?php echo $level ?>">
        <input type="hidden" name="tanggal" value="<?php echo $day ?>">
        <input type="hidden" name="bulan" value="<?php echo $month ?>">
        <p align="center">
        <button class="btn btn-primary" type="submit">ABSEN HARI INI</button></p>
      </form>
    </p>
</div>
</div>
</div>
