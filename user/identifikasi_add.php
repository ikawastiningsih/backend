<?php 

require_once"../config/koneksi.php";

$respon = array();

if (isset($_POST['id_identifikasi'])) {    
		$id_identifikasi      = $_POST['id_identifikasi'];
		$nama_user            = $_POST['nama_user'];
    $template             = $_POST['template'];
    $tingkat_kematangan   = $_POST['tingkat_kematangan'];
    
    

	$sql="INSERT INTO tb_identifikasi VALUES ('', '$nama_user', '$template', '$tingkat_kematangan')";
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
	echo 'fail: ' . $e->getMessage();
  	$konek->rollback();
}
$konek->autocommit(TRUE);
return $s;
}
?>
