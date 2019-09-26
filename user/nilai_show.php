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
$sql="SELECT * FROM tb_nilai order by id_nilai desc";
$jum=getJum($konek,$sql);
if ($jum> 0) {
    $respon["record"] = array();  
	$arr=getData($konek,$sql);
		foreach($arr as $d) {
        $record = array();
            $record["id_nilai"] 			= $d["id_nilai"];
			$record["nilai_r"]				= $d["nilai_r"];
			$record["nilai_g"]				= $d["nilai_g"];
			$record["nilai_b"]				= $d["nilai_b"];
			$record["tingkat_kematangan"]	= $d["tingkat_kematangan"];

			
        
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

