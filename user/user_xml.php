<?php 
require_once"../konmysqli.php";

$sql = "select * from `$tbadmin` order by `kode_admin` desc";
$xml = "<admin>";
$arr=getData($conn,$sql);
foreach($arr as $d) {	
  $xml .= "<record>";
  $xml .= "<kode_admin>".$d['kode_admin']."</kode_admin>";  
  $xml .= "<username>".$d['username']."</username>";
  $xml .= "<password>".$d['password']."</password>";
  $xml .= "<telepon>".$d['telepon']."</telepon>";
  $xml .= "<email>".$d['email']."</email>";
  $xml .= "<status>".$d['status']."</status>";
  $xml .= "</record>";  
}
$xml .= "</admin>";

$sxe = new SimpleXMLElement($xml);//instansiasi objek SimpleXMLElement
$sxe->asXML("admin.xml");
?>


<?php
function getData($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$arr = $rs->fetch_all(MYSQLI_ASSOC);
	//foreach($arr as $row) {
	//  echo $row['username_kelas'] . '*<br>';
	//}
	
	$rs->free();
	return $arr;
}

?>