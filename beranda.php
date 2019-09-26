<?php
date_default_timezone_set("Asia/Jakarta");
?>
<section class="ftco-section ftco-bread">
	<div class="container">
		<div class="row no-gutters slider-text justify-content-center align-items-center">
    		<div class="col-md-12 ftco-animate">
       			 <h1 class="bread">Beranda</h1>
     		 </div>
   		 </div>
	</div>
</section>
<section class="ftco-section">
	<div class="container">
    
	    <h4><p style="text-align:center">Anda Berhasil login sebagai Admin</p></h4>
	    <?php
	    include 'config/koneksi.php';
	    echo "<h3 align='center'>Selamat Datang ".$_SESSION['nama_admin']."</h3>"
	    ?>
	    <h4><p style="text-align:center"></p></h4>
	    <?php
	    $tanggal = Date("Y-m-d");
	    $time = Date("H:i:s");
	    $conv = date('d F Y', strtotime($tanggal));
	    Echo "<h4 align='center'>$conv</p></h5>";
	    Echo "<h4 align='center'>$time</p></h5><br>";		  
	    ?>

   
 	</div>
</section>
