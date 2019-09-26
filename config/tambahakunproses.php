<?php

	include 'koneksi.php';

	$nama_user					= $_POST["nama_user"];
	$jenis_kelamin				= $_POST["jenis_kelamin"];
	$tanggal_lahir				= $_POST["tanggal_lahir"];
	$alamat_email				= $_POST["alamat_email"];
	$username					= $_POST["username"];
	$password 					= md5($_POST['password']);
	$level						= $_POST["level"];



	$tambah	= "INSERT INTO tb_user VALUES ('', '$nama_user', '$jenis_kelamin', '$tanggal_lahir','$alamat_email', '$username', '$password', '$level')";

	$masuk = mysqli_query($konek,$tambah)or die(mysqli_error($konek));

if ($masuk){
	echo "<br><br><br><strong><center><i>Data Berhasil Di Simpan!";
	//echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pengguna">';  
}
else
 {
 
 	echo 'GAGAL';
 }

?>