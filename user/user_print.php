<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>


<h3><center>Laporan data admin:</h3>
 

<table width="100%" border="0">
  <tr>
    <th width="5%"><center>no</td>
    <th width="10%"><center>kode_admin</td>
    <th width="10%"><center>nama_admin</td>
    <th width="25%"><center>username</td>
    <th width="25%"><center>password</td>
    <th width="20%"><center>telepon</td>
    <th width="10%"><center>email</td>
    <th width="5%"><center>status</td>
  </tr>
<?php  
$kode_admin=$_GET["kode"];
  $sql="select * from `$tbadmin` where derewew order by `kode_admin` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$kode_admin=$d["kode_admin"];
				$nama_admin=$d["nama_admin"];
				$username=$d["username"];
				$password=$d["password"];
				$telepon=$d["telepon"];
				$email=$d["email"];
				$status=$d["status"];
						
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$kode_admin</td>
				<td>$nama_admin</td>
				<td>$username</td>
				<td>$password</td>
				<td>$telepon</td>
				<td>$email</td>
				<td>$status</td>
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$kode_admin</td>
				<td>$nama_admin</td>
				<td>$username</td>
				<td>$password</td>
				<td>$telepon</td>
				<td>$email</td>
				<td>$status</td>
				</tr>";
				}
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data admin belum tersedia...</blink></td></tr>";}
		
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
