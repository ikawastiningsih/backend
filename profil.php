<?php

error_reporting();

include 'config/koneksi.php';

$id_admin = $_SESSION['id_admin'];
//$id = $_GET['id_admin'];



$tampilkan    = "SELECT id_admin, nama_admin, jk_admin, nohp_admin, password, alamat_admin,email_admin, username, level FROM tb_admin WHERE id_admin = '$id_admin'";
$hasil      = mysqli_query($konek, $tampilkan)or die(mysql_error());
$data       = mysqli_fetch_array($hasil);



?>
<style type="text/css">
  .button {
  outline: 0;
  background: #c68c53;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #000000;
  font-size: 16px;
  font-weight: bold;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.button:hover,.form button:active,.form button:focus {
  background: #cc7a00;
}
</style>
<section class="ftco-section ftco-bread">
  <div class="container">
    <div class="row no-gutters slider-text justify-content-center align-items-center">
        <div class="col-md-12 ftco-animate">
             <h1 class="bread">Profil</h1>
         </div>
       </div>
  </div>
</section>
<section class="ftco-section">
<div class="container"> 

 <table class="table table-striped-bordered">
  <tr>
    <input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>">
      <td width="200" style="color: black;">Nama</td>
      <td width="50">:</td>
      <td style="color: black;"><?php echo $data['nama_admin']; ?></td>
    </tr>
  <tr>
      <td width="200" style="color: black;">Jenis Kelamin</td>
      <td width="50">:</td>
      <td style="color: black;"><?php echo $data['jk_admin']; ?></td>
  </tr>
   <tr>
      <td width="200" style="color: black;">Nomer Handphone</td>
      <td width="50">:</td>
      <td style="color: black;"><?php echo $data['nohp_admin']; ?></td>
  </tr>
  <tr>
      <td width="200" style="color: black;">Alamat</td>
      <td width="50">:</td>
      <td style="color: black;"><?php echo $data['alamat_admin']; ?></td>
  </tr>
  <tr>
      <td width="200" style="color: black;">Nomer Handphone</td>
      <td width="50">:</td>
      <td style="color: black;"><?php echo $data['nohp_admin']; ?></td>
  </tr>
  <tr>
      <td width="200" style="color: black;">Alamat Email</td>
      <td width="50">:</td>
      <td style="color: black;"><?php echo $data['email_admin']; ?></td>
  </tr>
  <tr>
      <td width="200" style="color: black;">Username</td>
      <td width="50">:</td>
      <td style="color: black;"><?php echo $data['username']; ?></td>
  </tr>
  <tr>
      <td width="200" style="color: black;">Password</td>
      <td width="50">:</td>
      <td style="color: black;"><?php echo $data['password']; ?></td>
  </tr>
  <tr>
      <td width="200" style="color: black;">Level</td>
      <td width="50">:</td>
      <td style="color: black;"><?php echo $data['level']; ?></td>
  </tr>
    </tr>
  </table>
  <div class="col-md-3">

  <a href="home.php?konten=editadmin&&id_admin=<?php echo $data['id_admin'];?>"><button class="button" >Edit Profile</button></a>
  </div>
</div>
</div>

