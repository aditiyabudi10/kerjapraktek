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
     <h4><p style="text-align:center">Anda Berhasil login sebagai ADMIN</p></h4>
    <?php
    include '../config/koneksi.php';
    echo "<h3 align='center'>SELAMAT DATANG ".$_SESSION['username']."</h3>"
    // echo $_SESSION['username'];
    ?>
    <h4><p style="text-align:center"></p></h4>
   <!--  <?php
    $tanggal = Date("Y-m-d");
    Echo "<h5 align='center'>$tanggal</p></h5><br>";
    $bulan= date("m");
    echo "Bulan: $bulan";
    ?> -->
    <br>
<p align="center"><a href="../config/proses_absen.php"><button class="btn btn-primary" type="submit">ABSEN HARI INI</button></a></p>
<br>
<br>



</div>
</div>
</div>
