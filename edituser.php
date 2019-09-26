<?php
/*
error_reporting(0);*/

include 'config/koneksi.php';

$id_user = $_GET['id_user'];

$tampilkan  	= "SELECT id_user, nama_user, jenis_kelamin, alamat_email, username, password FROM tb_user WHERE id_user = '$id_user'";
$hasil   		= mysqli_query($konek, $tampilkan)or die(mysqli_error($konek));
$data    		= mysqli_fetch_array($hasil);

?>
<br>
<form class="form-horizontal" action="config/edittaprosess.php" method="POST">
	<ol class="breadcrumb">
      <li class="active"><b>EDIT TAHUN AJARAN</b></li>
       </ol>
    <input type="hidden" name="id_user" value="<?php echo $id_user ?>">
    <div class="form-group">
		<label class="col-sm-3">Nama User</label>
		<label class="col-sm-1">:</label>
		<label class="col-sm-4"><input class="form-control" name="tahunajaran" type="text" value="<?php echo $data['tahunajaran']; ?>"></label>
	</div>
  <div class="form-group">
    <label class="col-sm-3">Angkatan</label>
    <label class="col-sm-1">:</label>
    <label class="col-sm-4"><input class="form-control" name="angkatan" type="text" value="<?php echo $data['angkatan']; ?>"></label>
  </div>
  <div class="form-group">
    <label class="col-sm-3">Total SPP</label>
    <label class="col-sm-1">:</label>
    <label class="col-sm-4"><input class="form-control" name="total_spp" type="text" value="<?php echo $data['total_spp']; ?>"></label>
  </div>
	<div class="form-group">
     <label class="col-sm-3"></label>
     <label class="col-sm-1"></label>
     <div class="col-sm-8" align="Right">
     <button class="btn btn-success">Tambah</button>
    </div>
</form>