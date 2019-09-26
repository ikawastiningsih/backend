<?php

	include "koneksi.php";

	$username  = $_POST["username"];
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";

	$login     = mysqli_query($konek,$query) or die(mysqli_error($konek));
	$jlhrecord = mysqli_num_rows($login);

	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);

	$id_admin   	 	= $data['id_admin'];
	$nama_admin     	= $data['nama_admin'];
	$username  		   	= $data['username'];
	$password  		   	= $data['password'];
	$level 				= $data['level'];
	


if($jlhrecord > 0){

	session_start();
	
	$_SESSION['id_admin']		=$id_admin;
	$_SESSION['nama_admin']		=$nama_admin;
	$_SESSION['username']		=$username;
	$_SESSION['password']		=$password;
	$_SESSION['level']			=$level;
	$_SESSION['id_user']		= session_id();

	//redirect level
		if($level == admin){
			header('Location:../home.php');
		
		}
}

else{

	echo "<br><br><br><strong><center><i>Maaf anda gagal login. Mungkin Username atau Password yang anda masukkan salah.<br>Silahkan masukkan Username atau Password dengan benar!";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "2; URL=../index.php">';  
}

?> 