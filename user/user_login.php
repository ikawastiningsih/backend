<?php 
require_once"../config/koneksi.php";
$respon = array();

if (isset($_GET["username"])) {
    $username = $_GET['username'];
	$password = $_GET['password'];
	
	$sql="SELECT * FROM `tb_user` WHERE `username` = '$username' and password='$password'";
    $jum=getJum($konek,$sql);
    if ($jum>0) {
            $d=getField($konek,$sql);
		    $record = array();
            $record["id_user"] 			= $d["id_user"];
			$record["nama_user"]		= $d["nama_user"];
			$record["jenis_kelamin"] 	= $d["jenis_kelamin"];
			$record["tanggal_lahir"] 	= $d["tanggal_lahir"];
			$record["alamat_email"] 	= $d["alamat_email"];
			$record["username"] 		= $d["username"];
			$record["password"] 		= $d["password"];
			
            $respon["sukses"] = 1;
            $respon["record"] = array();
			
            array_push($respon["record"], $record);
             $respon["pesan"] = "$jum record";
			echo json_encode($respon);
        } else {
            $respon["sukses"] = 0;
            $respon["pesan"] = "0 record";
            echo json_encode($respon);
        }

} else {
    $respon["sukses"] = 0;
    $respon["pesan"] = "? lengkapi data";
    echo json_encode($respon);
}
?>

<?php

function getJum($konek,$sql){
  $rs=$konek->query($sql);
  $jum= $rs->num_rows;
	$rs->free();
	return $jum;
}

function getField($konek,$sql){
	$rs=$konek->query($sql);
	$rs->data_seek(0);
	$d= $rs->fetch_assoc();
	$rs->free();
	return $d;
}
?>