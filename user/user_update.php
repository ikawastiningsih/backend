<?php 
require_once"../config/koneksi.php";
$respon = array();

if (isset($_POST['id_user'])) {    
		$id_user         = $_POST['id_user'];
		$nama_user       = $_POST['nama_user'];
	    $jenis_kelamin   = $_POST['jenis_kelamin'];
	    $tanggal_lahir   = $_POST['tanggal_lahir'];
	    $alamat_email    = $_POST['alamat_email'];
		$username        = $_POST['username'];
		$password        = $_POST['password'];
   	

	$sql="UPDATE '$tb_user' SET 'nama_user' = '$nama_user','jenis_kelamin' = '$jenis_kelamin', 'tanggal_lahir' = '$tanggal_lahir', 'alamat_email' = '$alamat_email','username' = '$username', 'password' = '$password'
	WHERE 'id_user' = '$id_user'";
    $ubah=process($konek,$sql);

    if ($ubah) {
        $respon["sukses"] = 1;
        $respon["pesan"] = "1 sukses update.";     
        echo json_encode($respon);
    } else {
        $respon["sukses"] = 0;
        $respon["pesan"] = "Gagal update data.";
        echo json_encode($respon);
        
    }
} else {
    $respon["sukses"] = 0;
    $respon["pesan"] = "data belum terset/terisi";
    echo json_encode($respon);
}
?>

