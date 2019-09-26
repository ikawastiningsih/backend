<section class="ftco-section ftco-bread">
	<div class="container">
		<div class="row no-gutters slider-text justify-content-center align-items-center">
    		<div class="col-md-12 ftco-animate">
       			 <h1 class="bread">Data Nilai Buah</h1>
     		 </div>
   		 </div>
	</div>
</section>
<section class="ftco-section">
<div class="container">    
	<table class="table table-bordered" id="table" width="100%" cellspacing="0">
	  <thead>
	    <tr>
	      <th>No.</th>
	      <th>Nama File</th>
	      <th>Nilai R</th>
	      <th>Nilai G</th>
	      <th>Nilai B</th>
	      <th>Keterangan</th>
	      <th colspan="2"><center>Aksi</center></th>
	    </tr>
	  </thead>
	    <?php

	      include 'config/koneksi.php';

	      $query = mysqli_query($konek, "SELECT id_nilai, nama_file, nilai_r, nilai_g, nilai_b, tingkat_kematangan FROM tb_nilai")or die(mysqli_error());
	              if(mysqli_num_rows($query) == 0){ 
	                echo '<tr><td colspan="6" align="center">Tidak ada data!</td></tr>';    
	              }
	                else
	              { 
	                $no = 1;        
	                while($data = mysqli_fetch_array($query)){  
	                  echo '<tr>';
	                  echo '<td>'.$no.'</td>';
	                  echo '<td>'.$data['nama_file'].'</td>';
	                  echo '<td>'.$data['nilai_r'].'</td>';
	                  echo '<td>'.$data['nilai_g'].'</td>';
	                  echo '<td>'.$data['nilai_b'].'</td>';
	                  echo '<td>'.$data['tingkat_kematangan'].'</td>';
	                   echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=home.php?konten=editakun&&id_nilai='.$data['id_nilai'].'><i class="icon-edit"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deletesiswaproses.php?id_nilai='.$data['id_nilai'].'><i class="icon-remove"></i></a></td>';
	                  $no++;  
	                }
	              }
	        
	          ?>

	        </tbody>
	      </table>
 	</div>
</section>

<script type="text/javascript">
$(document).ready(function() {
    $('#table').DataTable();
} );
</script>
<style type="text/css">
    table {
        border-width: 1px;
        border-color: #3A3A3A;
        border-collapse: collapse;
        color: black;
    }
    table th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #FFA6A6;
        background-color: #e65c00;
        color: #ffffff;
    }
    table tr:hover td {
        cursor: pointer;
    }
    table tr:nth-child(even) td{
        background-color: #F7CFCF;
    }
    table td {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #FFA6A6;
        background-color: #ffffff;
    }
</style>