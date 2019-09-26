<section class="ftco-section ftco-bread">
	<div class="container">
		<div class="row no-gutters slider-text justify-content-center align-items-center">
    		<div class="col-md-12 ftco-animate">
       			 <h1 class="bread">Tambah Akun</h1>
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
	            <form action="config/tambahakunproses.php" method="POST" class="bg-light p-5">
	              <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Nama</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input type="text" class="form-control" name="nama_user" placeholder="Masukkan Nama Anda">
	              </div>
	              <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Jenis Kelamin</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7">
	                	<select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
			                <option>Pilih Jenis Kelamin</option>
			                <option value="L">Laki-laki</option>
			                <option value="P">Perempuan</option>
			             </select>
	              </div>
	              <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Tanggal Lahir</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input class="form-control input-md" type="date" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
	              </div>
	              <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Alamat Email</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input type="text" class="form-control" name="alamat_email" placeholder="Masukkan Alamat Email">
	              </div>
	               <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Username</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input type="text" class="form-control" name="username" placeholder="Username">
	              </div>
	               <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Password</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7"><input type="password" class="form-control" name="password" placeholder="Password">
	              </div>
	              <div class="form-group">
	              	<label class="col-sm-3" style="font-size: 18px; color: black;">Level</label>
					<label class="col-sm-1">:</label>
	                <label class="col-sm-7">
	                	<select class="form-control" id="level" name="level">
			                <option>Pilih Level</option>
			                <option value="L">Admin</option>
			                <option value="P">User</option>
			             </select>
	              </div>
	              <div class="form-group">
	               <label class="col-sm-8"></label>
	               <label class="col-sm-3"><input type="submit" class="btn btn-success py-2 px-4"></label>
	              </div>
	            </form>
	          
	          </div>
 	</div>
</section>

