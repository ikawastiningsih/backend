<?php 
require_once"../config/koneksi.php";
$response = array();

if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];
	$sql="DELETE FROM `$tb_user` WHERE `id_user` = '$id_user'";
	$hapus=process($conn,$sql);
   if($hapus){
        $respon["sukses"] = 1;
        $respon["pesan"] = "1 berhasil dihapus";
        echo json_encode($respon);
    } else {
        $respon["sukses"] = 0;
        $respon["pesan"] = "0 Gagal dihapus";
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