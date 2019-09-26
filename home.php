<?php

  session_start();

 if (isset($_SESSION['id_user']))
  {
     include 'config/koneksi.php';
  }
  else{
    header('location:index.php');
  }
  
  if (isset($_GET['konten'])) $konten = $_GET['konten'];
  else $konten = "home";


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Identifikasi Buah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.html"><span class="img" style="background-image: url(gambar/logonew.png);"></span>Admin</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><a href="home.php">Beranda</a></li>
					<!-- <li><a href="home.php?konten=datanilai">Data Nilai Buah</a></li> -->
					<li><a href="home.php?konten=pengguna">Data Pengguna</a></li>
					<!-- <li><a href="home.php?konten=upload">Upload</a></li> -->
					<li><a href="home.php?konten=profil">Profile</a></li>
					<li><a href="home.php?konten=tambahakun">Tambah Akun Admin</a></li>
					<li><a href="config/logout.php" id="logout">Logout</a></li>
				</ul>
			</nav>

		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			
			<?php
            // jika id session tidak ditemukan, maka diarahkan ke halaman login admin
            // if (!isset($_SESSION['id_pegawai']))
            // {   
            //         header('location:index.php');
            // }

          if ($konten=='home')
            include 'beranda.php';
          elseif ($konten=='datanilai')
            include 'datanilai.php';
          elseif ($konten=='pengguna')
            include 'pengguna.php';
          elseif ($konten=='tambahakun')
            include 'tambahakun.php';
           elseif ($konten=='upload')
            include 'upload.php';
           elseif ($konten=='profil')
            include 'profil.php';
          elseif ($konten=='editakun')
            include 'editakun.php';
          elseif ($konten=='editadmin')
            include 'editadmin.php';
          elseif ($konten=='history')
            include 'history.php';
           
          

      ?>

    </div>

		
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
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