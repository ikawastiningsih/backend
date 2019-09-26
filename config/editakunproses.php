 <?php

	include 'koneksi.php';

   
    $id_user                    = $_POST["id_user"];
    $nama_user                  = $_POST["nama_user"];
    $jenis_kelamin              = $_POST["jenis_kelamin"];
    $tanggal_lahir              = $_POST["tanggal_lahir"];
    $alamat_email               = $_POST["alamat_email"];
    $username                   = $_POST["username"];
    $password                   = $_POST['password'];

	$edit 	    = "UPDATE tb_user SET nama_user='$nama_user', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat_email='$alamat_email', username='$username', password='$password' WHERE id_user='$id_user'";
	$editakun	= mysqli_query($konek, $edit)or die(mysqli_error());

	if ($editakun)
    	{
    		echo "<br><br><br><strong><center><i>Data Berhasil Diubah!";
    		echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=../home.php?konten=pengguna">';
    	}
	else {
    		print"
    			<script>
    				alert(\"Maaf, Data tidak berhasil diubah!\");
    				history.back(-1);
    			</script>";
    	}
?>