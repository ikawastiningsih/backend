<?php

error_reporting();

include 'config/koneksi.php';


$id_user   = $_GET['id_user'];


?>
<section class="ftco-section ftco-bread">
	<div class="container">
		<div class="row no-gutters slider-text justify-content-center align-items-center">
    		<div class="col-md-12 ftco-animate">
       			 <h1 class="bread">History</h1>
     		 </div>
   		 </div>
	</div>
</section>
<section class="ftco-section">
<div class="container">    
	<table class="table table-bordered" id="" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>No.</th>
      <th>Nama Pengguna</th>
      <th>Hasil Analisa</th>
      <th>Template</th>
      <th>Nilai Minimum</th>
      <th>Tanggal</th>
      <th>Jam</th>
     

    
    </tr>
  </thead>
  <tfoot>
    <?php

      include 'config/koneksi.php';

      $query = mysqli_query($konek, "SELECT a.id_user, a.nama_user, b.* FROM tb_user a 
                            INNER JOIN tb_identifikasi b ON a.id_user = b.id_user
                            WHERE a.id_user = '$id_user'")or die(mysqli_error($konek));
              if(mysqli_num_rows($query) == 0){ 
                echo '<tr><td colspan="6" align="center">Tidak ada data!</td></tr>';    
              }
                else
              { 
                $no = 1;        
                while($data = mysqli_fetch_array($query)){  
                  echo '<tr>';
                  echo '<td>'.$no.'</td>';
                  echo '<td>'.$data['nama_user'].'</td>';
                  echo '<td>'.$data['analisa'].'</td>';
                  echo '<td>'.$data['kategori'].'</td>';
                  echo '<td>'.$data['nmin'].'</td>';
                  echo '<td>'.$data['tanggal'].'</td>';
                  echo '<td>'.$data['jam'].'</td>';
                
                 
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
        background-color: #993d00;
        color: #ffffff;
    }
    table tr:hover td {
        cursor: pointer;
    }
    table tr:nth-child(even) td{
        background-color: #ffffff;
    }
    table td {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #FFA6A6;
        background-color:#ffffff;
    }
</style>