<?php 
function getJum($konek,$sql){
  $rs=$konek->query($sql);
  $jum= $rs->num_rows;
	$rs->free();
	return $jum;
}
function getData($konek,$sql){
	$rs=$konek->query($sql);
	$rs->data_seek(0);
	$arr = $rs->fetch_all(MYSQLI_ASSOC);
	//foreach($arr as $row) {
	//  echo $row['nama_kelas'] . '*<br>';
	//}
	
	$rs->free();
	return $arr;
}
require_once"../config/koneksi.php";
$respon = array();
$sql="SELECT * FROM tb_user order by id_user desc";
$jum=getJum($konek,$sql);
if ($jum> 0) {
    $respon["record"] = array();  
	$arr=getData($konek,$sql);
		foreach($arr as $d) {
        $record = array();
            $record["id_user"] 			= $d["id_user"];
			$record["nama_user"]		= $d["nama_user"];
			$record["jenis_kelamin"] 	= $d["jenis_kelamin"];
			$record["tanggal_lahir"] 	= $d["tanggal_lahir"];
			$record["alamat_email"] 	= $d["alamat_email"];
			$record["username"] 		= $d["username"];
			$record["password"] 		= $d["password"];
			
			
        
        array_push($respon["record"], $record);       //tambahkan array 'record' pada array final 'respon'
    }
    // sukses
    $respon["sukses"] = 1;
	$respon["pesan"] = "$jum record";
    echo json_encode($respon);
} else {
    // jika data kosong
	$respon["record"]="";
    $respon["sukses"] = 0;
    $respon["pesan"] = "0 record";
    echo json_encode($respon);
}
?>

