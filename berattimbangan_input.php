<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Input Berat Timbangan </title>
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
                <h3>Input Berat Timbangan</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div>
                <div class="x_panel">
                  <div class="x_content">
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="produk_save.php" method="post">
                      <div class="form-group">
					  <?php
						include('koneksi.php');
						$query = mysqli_query($con, "SELECT nama_produk FROM produk ORDER BY id") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
						$query2 = mysqli_query($con, "SELECT id_produk FROM produk ORDER BY id") or die(mysqli_connect_error());
						$row2 = mysqli_fetch_assoc($query2);
					  ?>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Nama Produk
							</label>
							<div class="col-md-3 col-sm-3 col-xs-4">
							<select class="form-control" name="nama_produk">
								<?php do { ?>
								<option value="<?=$row['nama_produk'];?>"><?=$row['nama_produk'];?></option>
								<?php } while ($row= mysqli_fetch_assoc($query));?>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							No. Batch
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							<select class="form-control" name="id_produk">
								<?php do { ?>
								<option value="<?=$row2['id_produk'];?>"><?=$row2['id_produk'];?></option>
								<?php 
								} while ($row2= mysqli_fetch_assoc($query2)); 
								?>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Shift
							</label>
							<div class="col-md-2 clockpicker" data-autoclose="true">
								<input type="text" class="form-control" value="09:30">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Ukuran
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
							  	<select class="form-control" name="ukuran">
								<option value=""></option>
								<option value=""></option>
								<option value=""></option>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Zona 1
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="text" name="zona_1" required="required" class="form-control col-md-7 col-xs-12" autofocus>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Zona 2
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="text" name="zona_2" required="required" class="form-control col-md-7 col-xs-12" autofocus>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Zona 3
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="text" name="zona_3" required="required" class="form-control col-md-7 col-xs-12" autofocus>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Zona 4
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="text" name="zona_4" required="required" class="form-control col-md-7 col-xs-12" autofocus>
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
