<section class="ftco-section ftco-bread">
	<div class="container">
		<div class="row no-gutters slider-text justify-content-center align-items-center">
    		<div class="col-md-12 ftco-animate">
       			 <h1 class="bread">Upload Data</h1>
     		 </div>
   		 </div>
	</div>
</section>
<section class="ftco-section"><?php 
include 'config/koneksi.php';
?>

<form method="post" enctype="multipart/form-data" action="uploadproses.php">
	Pilih File yang akan di Import: 
	<br>
	<br>
	<input name="fileupload" type="file" required="required"> <br><br>
	<input name="upload" type="submit" value="Import" button class="btn btn-success"><br><br>
</form>
</section>