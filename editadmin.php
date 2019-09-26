<?php
/*
error_reporting(0);*/

include 'config/koneksi.php';

$id_admin = $_GET['id_admin'];

$tampilkan  	= "SELECT id_admin, nama_admin, jk_admin, nohp_admin, email_admin, alamat_admin, username, password, level FROM tb_admin WHERE id_admin = '$id_admin'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysqli_error($konek));
$data    		= mysqli_fetch_array($hasil);

?>
<section class="ftco-section ftco-bread">
  <div class="container">
    <div class="row no-gutters slider-text justify-content-center align-items-center">
        <div class="col-md-12 ftco-animate">
             <h1 class="bread">Edit Akun Admin</h1>
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
              <form action="config/editadminproses.php" method="POST" class="bg-light p-5">
              <input type="hidden" name="id_admin" value="<?php echo $id_admin ?>">
                <div class="form-group">
                  <label class="col-sm-3" style="font-size: 18px; color: black;">Nama</label>
          <label class="col-sm-1">:</label>
                  <label class="col-sm-7"><input type="text" class="form-control" name="nama_admin" value="<?php echo $data['nama_admin']; ?>">
                </div>
                <div class="form-group">
                  <label class="col-sm-3" style="font-size: 18px; color: black;">Jenis Kelamin</label>
          <label class="col-sm-1">:</label>
                  <label class="col-sm-7">
                    <select class="form-control" id="jk_admin" name="jk_admin">
                      <option><?php echo $data['jk_admin'];?></option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                   </select>
                </div>
                <div class="form-group">
                  <label class="col-sm-3" style="font-size: 16px; color: black;">Nomer Handphone</label>
                  <label class="col-sm-1">:</label>
                  <label class="col-sm-7"><input type="text" class="form-control" name="nohp_admin" value="<?php echo $data['nohp_admin']; ?>">
                </div>
                <div class="form-group">
                  <label class="col-sm-3" style="font-size: 16px; color: black;">Alamat</label>
                  <label class="col-sm-1">:</label>
                  <label class="col-sm-7"><input type="text" class="form-control" name="alamat_admin" value="<?php echo $data['alamat_admin']; ?>">
                </div>
                <div class="form-group">
                  <label class="col-sm-3" style="font-size: 18px; color: black;">Alamat Email</label>
                  <label class="col-sm-1">:</label>
                  <label class="col-sm-7"><input type="text" class="form-control" name="email_admin" value="<?php echo $data['email_admin']; ?>">
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
                  <label class="col-sm-3" style="font-size: 18px; color: black;">Level</label>
                <label class="col-sm-1">:</label>
                  <label class="col-sm-7">
                    <select class="form-control" id="level" name="level">
                      <option><?php echo $data['level'];?></option>
                      <option value="admin">Admin</option>
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

