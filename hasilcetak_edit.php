<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Edit Hasil Cetak </title>
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
                <h3>Edit Hasil Cetak</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div>
                <div class="x_panel">
                  <div class="x_content">
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="hasilcetak_edit_save.php" method="post">
					  <?php
						include('koneksi.php');
						$id=$_GET['id'];
						$query = mysqli_query($con, "SELECT * FROM hasil_cetak WHERE id=$id") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
					  ?>
				      <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Nama Produk
							</label>
							<div class="col-md-3 col-sm-3 col-xs-4">
							<input type="text" disabled name="nama_produk" required="required" class="form-control col-md-7 col-xs-12" value=<?=$row['nama_produk'];?>>
							<input type="hidden" name="id" required="required" class="form-control col-md-7 col-xs-12" value=<?=$row['id'];?>>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							No-Batch
							</label>
							<div class="col-md-3 col-sm-3 col-xs-4">
							<input type="text" disabled name="dhift" required="required" class="form-control col-md-7 col-xs-12" value=<?=$row['id_produk'];?>>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Shift
							</label>
							<div class="col-md-3 col-sm-3 col-xs-4">
							<input type="text" disabled name="dhift" required="required" class="form-control col-md-7 col-xs-12" value=<?=$row['shift'];?>>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Tanggal
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							  <input type="date" value='<?=$row['tanggal_hasil_cetak']?>' name="tanggal_hasil_cetak" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Jam
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="time" value='<?=$row['jam_hasil_cetak']?>' name="jam_hasil_cetak" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Standar
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input value='<?=$row['standar']?>' type="input" id="standar" name="standar">
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Aktual
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input value='<?=$row['actual']?>' type="input" id="actual" name="actual">
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Start Downtime
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="time" value='<?=$row['start_downtime']?>' name="start_downtime" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Stop Downtime
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="time" value='<?=$row['stop_downtime']?>' name="stop_downtime" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Deskripsi Downtime
							</label>
							<div class="col-md-4 col-sm-3 col-xs-4">
							  <input type="text" value='<?=$row['deskripsi_downtime']?>' name="deskripsi_downtime" required="required" class="form-control col-md-7 col-xs-12" >
							</div>
					  </div>					  
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Tindakan Dilakukan
							</label>
							<div class="col-md-4 col-sm-3 col-xs-4">
							  <input type="text" value='<?=$row['tindakan_dilakukan']?>' name="tindakan_dilakukan" required="required" class="form-control col-md-7 col-xs-12" >
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Tindakan Pecegahan
							</label>
							<div class="col-md-4 col-sm-3 col-xs-4">
							  <input type="text" value='<?=$row['tindakan_pencegahan']?>' name="tindakan_pencegahan" required="required" class="form-control col-md-7 col-xs-12" >
							</div>
					  </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-danger" type="button" onclick="window.history.back()">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
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
