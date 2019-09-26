<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include 'config/koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
error_reporting();
?>


<?php
// upload file xls
$target = basename($_FILES['fileupload']['name']) ;
move_uploaded_file($_FILES['fileupload']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['fileupload']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['fileupload']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=4; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nama_file     		= $data->val($i, 2);
	$nilai_r    		= $data->val($i, 3);
	$nilai_g		  	= $data->val($i, 4);
	$nilai_b 		 	= $data->val($i, 5);
	$tingkat_kematangan	= $data->val($i, 6);
	

	if($nama_file != "" &&$tingkat_kematangan != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($konek,"INSERT into tb_nilai values('','$nama_file','$nilai_r','$nilai_g','$nilai_b', '$tingkat_kematangan')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['fileupload']['name']);

// alihkan halaman ke index.php
header("location:home.php?berhasil=$berhasil");
?>