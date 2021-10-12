<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Data Berat Timbangan </title>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure to delete this record?')){
            e.preventDefault();
            return false;
        }
        return true;
    });
});
</script>
</head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
<?php
include('side1.html');
include('top.html');
?>
        <!-- /page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Berat Timbangan</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div>
                <div class="x_panel">
                  <div class="x_content">
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="berattimbangan_save.php" method="post">
                      <div class="form-group">
					  <?php
						include('koneksi.php');
						$nama_produk=$_GET['nama_produk'];
						$id_produk=$_GET['id_produk'];
						$tanggal_berat_timbangan=$_GET['tanggal_berat_timbangan'];
						$shift=$_GET['shift'];
						$q = "SELECT * FROM berat_timbangan WHERE nama_produk='$nama_produk' AND id_produk='$id_produk' AND tanggal_berat_timbangan='$tanggal_berat_timbangan' AND shift='$shift'";
						$query = mysqli_query($con, $q) or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
					  ?>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Nama Produk
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							  <input type="text" name="nama_produk" class="form-control col-md-7 col-xs-12" value="<?=$row['nama_produk'];?>" disabled>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_produk">
							No. Batch
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							  <input type="text" name="id_produk" class="form-control col-md-7 col-xs-12" value="<?=$row['id_produk'];?>" disabled>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Shift
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							  <input type="text" name="shift" class="form-control col-md-7 col-xs-12" value="<?=$row['shift'];?>" disabled>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Tanggal
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							  <input type="text" name="tanggal_berat_timbangan" class="form-control col-md-7 col-xs-12" value="<?=$row['tanggal_berat_timbangan'];?>" disabled>
							</div>
					  </div>
					  
						<table class="table" id="datatable-buttons">
						<thead>
                            <tr>
                                <th><div align="center">No</div></th>
                                <th><div align="center">Jam</div></th>
                                <th><div align="center">Berat</div></th>
								<?php
								if ($row_user['jabatan']=='administrator' OR $row_user['jabatan']=='operator') {	
								echo '<th><div align="center">Action</div></th>';
								}
								else
								{
									
								}
								?>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						include("koneksi.php");
						$count = 1;
						
						do { ?>
							<tr>
								<td><div align="center"><?php echo $count; ?></div></td>
								<td><div align="center"><?php echo $row['jam_timbangan']; ?></div></td>
								<td><div align="center"><?php echo $row['berat']; ?> g</div></td>
								<?php
								if ($row_user['jabatan']=='administrator' OR $row_user['jabatan']=='operator') {	
								echo '<td><div align="center">';
								echo '<a href="berattimbangan_edit.php?id='.$row['id'].'" title="Edit"><img src="images/application_form_edit.png" width="16" height="16" /></a>  ';
								echo '<a href="berattimbangan_delete.php?id='.$row['id'].'" class="delete" title="Delete"><img src="images/application_delete.png" width="16" height="16" /></a>';
								}
								else
								{
									
								}
								?>
								</div></td>
							</tr>
						<?php 
						$count++;
						} while ($row = mysqli_fetch_assoc($query)); 
						?>
                         </tbody>
					</table>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		
<?php include('footer.html');?>
      </div>
    </div>
	<?php include('js.html');?>
  </body>
</html>
