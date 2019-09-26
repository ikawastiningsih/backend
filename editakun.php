<?php

error_reporting();

include 'config/koneksi.php';

$id_user = $_GET['id_user'];

$tampilkan  	= "SELECT id_user, nama_user, jenis_kelamin, alamat_email, tanggal_lahir, username , password FROM tb_user WHERE id_user = '$id_user'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysql_error());
$data    		= mysqli_fetch_array($hasil);

?>
<section class="ftco-section ftco-bread">
	<div class="container">
		<div class="row no-gutters slider-text justify-content-center align-items-center">
    		<div class="col-md-12 ftco-animate">
       			 <h1 class="bread">Edit Akun</h1>
     		 </div>
   		 </div>
	</div>
</section>
<?php
    		include 'config/koneksi.php';
    		?>
<section class="ftco-section">
<div class="container">    
	  <div class="col-md-11">
	            <form action="config/editakunproses.php" method="POST" class="bg-light p-5">
	            <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
	              <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Nama</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input type="text" class="form-control" name="nama_user" value="<?php echo $data['nama_user']; ?>">
	              </div>
	              <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Jenis Kelamin</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7">
	                	<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
			                <option><?php echo $data['jenis_kelamin'];?></option>
			                <option value="L">Laki-laki</option>
			                <option value="P">Perempuan</option>
			             </select>
	              </div>
	              <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Tanggal Lahir</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input class="form-control input-md" type="text" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']; ?>" required>
	              </div>
	              <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Alamat Email</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input type="text" class="form-control" name="alamat_email" value="<?php echo $data['alamat_email']; ?>">
	              </div>
	               <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Username</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input type="text" class="form-control" name="username" value="<?php echo $data['username']; ?>">
	              </div>
	               <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Password</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>">
	              </div>
	              <div class="form-group">
	               <label class="col-sm-8"></label>
	               <label class="col-sm-3"><input type="submit" class="btn btn-success py-2 px-4"></label>
	              </div>
	            </form>
	          
	          </div>
 	</div>
</section>

