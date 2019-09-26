<?php 

require_once"config/koneksi.php";
date_default_timezone_set("Asia/Jakarta");
$respon = array();

if (isset($_POST['id_user'])) {    
		$id_user         = $_POST['id_user'];
		$analisa         = $_POST['analisa'];
    $kategori        = $_POST['kategori'];
    $keterangan      = $_POST['keterangan'];
    $nmin            = $_POST['nmin'];
    $tanggal         =date("Y-m-d");
    $jam             =date("H:i:s");

	$sql="INSERT INTO tb_identifikasi (`id_identifikasi`, `id_user`, `analisa`, `kategori`, `nmin`,`tanggal`, `jam`, `keterangan`) VALUES ('', '$id_user','$analisa', '$kategori', '$nmin', '$tanggal', '$jam', '$keterangan')";
  $simpan=process($konek,$sql);

   if($simpan){
        $respon["sukses"] = 1;
        $respon["pesan"] = "1 sukses tambah.";
        echo json_encode($respon);
    } else {
        $respon["sukses"] = 0;
        $respon["pesan"] = "0 gagal tambah";
        echo json_encode($respon);
    }
} else {
    $respon["sukses"] = 0;
    $respon["pesan"] = "? lengkapi data";
    echo json_encode($respon);
}
?>




<?php
function process($konek,$sql){
$s=false;
$konek->autocommit(FALSE);
try {
  $rs = $konek->query($sql);
  if($rs){
	      $konek->commit();
	    $last_inserted_id = $konek->insert_id;
 		$affected_rows = $konek->affected_rows;
  		$s=true;
  }
} 
catch (Exception $e) {
	echo 'fail: ' . $e->POSTMessage();
  	$konek->rollback();
}
$konek->autocommit(TRUE);
return $s;
}
?>
