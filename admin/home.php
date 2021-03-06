<?php

 session_start();
 
 if (isset($_GET['konten'])) $konten = $_GET['konten'];
 else $konten = "home";

 // $id_karyawan= $_SESSION['id'];

 if (isset($_SESSION['id']))
  {
     include '../config/koneksi.php';
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistem Penggajian</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../bootstrap/css/sb-admin.css" rel="stylesheet">
  <script src="jquery-3.3.1.min.js"></script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="home.php">Sistem Penggajian CV. BANGKIT MANDIRI</a> 
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <div style="float: center;"></div>
       
   <?php
  include '../config/koneksi.php';

    echo '<center><img src="../gambar/user.png" height= "80px" width = "80px"> </center>';
    echo "<font color='white'><center>ADMIN</center></font>";
    ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="home.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Beranda</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="home.php?konten=datakaryawan">
            <i class="fa fa-fw fa-clipboard"></i>
            <span class="nav-link-text"> Data Karyawan</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="home.php?konten=gaji">
            <i class="fa fa-fw fa-clipboard"></i>
            <span class="nav-link-text"> Input Gaji Karyawan</span>
          </a>
        </li>
         <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Beranda">
          <a class="nav-link" href="home.php?konten=tambahpenempatan">
            <i class="fa fa-fw fa-clipboard"></i>
            <span class="nav-link-text"> Tambah Penempatan Karyawan</span>
          </a>
        </li> -->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="../config/logout.php" id="logout">
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Log Out</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Isi Konten -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <?php
      
          if ($konten=='home')
            include 'beranda.php';
          if($konten=='datakaryawan')
            include 'datakaryawan.php';
          if($konten=='tambahakun')
            include 'tambahakun.php';
          if($konten=='editkaryawan')
            include 'editkaryawan.php';
          if($konten=='infodetail')
            include 'infodetail.php';
          if($konten=='gaji')
            include 'gaji.php';
          if($konten=='inputgaji')
            include 'inputgaji.php';
          if($konten=='input-gaji')
            include 'input-gaji.php';
          // if($konten=='tambahpenempatan')
          //   include 'tambahpenempatan.php';
          // if($konten=='editlokasi')
          //   include 'editlokasi.php';



         

      ?>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Aditya Budi Pratama | 2015230055 | Kerja Praktek | Teknik Informatika | Universitas Darma Persada
          </small>
        </div>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
  
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
<script type="text/javascript">
  $(function(){
      $('a#logout').click(function(){
          if(confirm('Are you sure to logout?')) {
              return true;
          }
          return false;
      });
  });  
</script>
<?php
  }
  else{
    header('location:index.php');
  }
?>