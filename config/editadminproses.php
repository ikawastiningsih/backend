<?php

include 'koneksi.php';

	$id_admin        				= $_POST['id_admin'];
	$nama_admin						= $_POST["nama_admin"];
    $jk_admin                       = $_POST["jk_admin"];
    $nohp_admin                     = $_POST["nohp_admin"];
    $alamat_admin                   = $_POST["alamat_admin"];
    $email_admin                    = $_POST["email_admin"];
	$username						= $_POST["username"];
	$password						= md5($_POST['password']);
    $level                          = $_POST["level"];

	$edit 	= "UPDATE tb_admin SET nama_admin='$nama_admin', jk_admin='$jk_admin', nohp_admin='$nohp_admin', alamat_admin='$alamat_admin', email_admin='$email_admin', username='$username', password='$password', level='$level' WHERE id_admin='$id_admin'";
	$editakun	= mysqli_query($konek, $edit)or die(mysqli_error());

	if ($editakun)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>