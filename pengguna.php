<section class="ftco-section ftco-bread">
	<div class="container">
		<div class="row no-gutters slider-text justify-content-center align-items-center">
    		<div class="col-md-12 ftco-animate">
       			 <h1 class="bread">Data Pengguna</h1>
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
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Alamat Email</th>
      <th>Username</th>
     

      <th colspan="3"><center>Aksi</center></th>
    </tr>
  </thead>
  <tfoot>
    <?php

      include 'config/koneksi.php';

      $query = mysqli_query($konek, "SELECT id_user, nama_user, jenis_kelamin, alamat_email, username  FROM tb_user")or die(mysqli_error());
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
                  echo '<td>'.$data['jenis_kelamin'].'</td>';
                  echo '<td>'.$data['alamat_email'].'</td>';
                  echo '<td>'.$data['username'].'</td>';
                
                  echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Edit" href=home.php?konten=editakun&&id_user='.$data['id_user'].'><i class="icon-edit" style="color:black;"></i></a></td>';
                    echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="History" href=home.php?konten=history&&id_user='.$data['id_user'].'><i class="icon-history" style="color:black;"></i></a></td>';
                        echo '<td  width="20"><a data-toggle="tooltip" data-placement="left" title="Hapus" href=config/deleteuserproses.php?id_user='.$data['id_user'].'><i class="icon-remove" style="color:black;"></i></a></td>';
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