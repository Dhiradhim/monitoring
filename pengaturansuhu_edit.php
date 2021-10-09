<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Input Pengaturan Suhu </title>
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
                <h3>Input Pengaturan Suhu</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div>
                <div class="x_panel">
                  <div class="x_content">
				  <?php
				  $id=$_GET['id'];
				  $query = mysqli_query($con, "SELECT * FROM pengaturan_suhu WHERE id=$id") or die(mysqli_connect_error());
				  $row = mysqli_fetch_assoc($query);
				  
				  ?>
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="pengaturansuhu_edit_save.php" method="post">
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
							Ukuran
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
							  	<select class="form-control" name="ukuran">
								<option <?php if( $row['ukuran']=='12 x 250 gr'){echo "selected"; } ?> value="12 x 250 gr">12 x 250 gr</option>
								<option <?php if( $row['ukuran']=='3 x 1 Kg'){echo "selected"; } ?> value="3 x 1 Kg">3 x 1 Kg</option>
								<option <?php if( $row['ukuran']=='4 x 1 Kg'){echo "selected"; } ?> value="4 x 1 Kg">4 x 1 Kg</option>
								<option <?php if( $row['ukuran']=='1 x 5 Kg'){echo "selected"; } ?> value="1 x 5 Kg">1 x 5 Kg</option>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Zona 1
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							<select class="form-control" name="zona_1" id="zona_1">
								<?php $c1=1; do { ?>
								<option <?php if( $row['zona_1']==$c1){echo "selected"; } ?> value="<?=$c1;?>"><?=$c1;?></option>
								<?php $c1++; } while ($c1<31);?>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Zona 2
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							<select class="form-control" name="zona_2" id="zona_2">
								<?php $c2=1; do { ?>
								<option <?php if( $row['zona_2']==$c2){echo "selected"; } ?> value="<?=$c2;?>"><?=$c2;?></option>
								<?php $c2++; } while ($c2<31);?>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Zona 3
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							<select class="form-control" name="zona_3" id="zona_3">
								<?php $c3=1; do { ?>
								<option <?php if( $row['zona_3']==$c3){echo "selected"; } ?> value="<?=$c3;?>"><?=$c3;?></option>
								<?php $c3++; } while ($c3<31);?>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Zona 4
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							<select class="form-control" name="zona_4" id="zona_4">
								<?php $c4=1; do { ?>
								<option <?php if( $row['zona_4']==$c4){echo "selected"; } ?> value="<?=$c4;?>"><?=$c4;?></option>
								<?php $c4++; } while ($c4<31);?>
							</select>
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
