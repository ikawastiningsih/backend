<?php

	include 'koneksi.php';

	$id_user = $_GET ['id_user'];

	$hapus 	 = "DELETE FROM tb_user WHERE id_user='$id_user'";
	$query	 = mysqli_query($konek, $hapus);

	if ($query)
	    {
	    	echo "<br><br><br><strong><center><i>Data berhasil dihapus!";
	    	echo "<META HTTP-EQUIV='REFRESH' CONTENT ='1; URL=../home.php'>";
	    }
	else {
	    	print"
	    		<script>
	    			alert(\"Data Tidak Berhasil Dihapus!\");
	    			history.back(-1);
	    		</script>";
	    }

	

?>