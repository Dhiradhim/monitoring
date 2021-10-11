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
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="pengaturansuhu_save.php" method="post">
                      <div class="form-group">
					  <?php
						include('koneksi.php');
						$query = mysqli_query($con, "SELECT * FROM produk ORDER BY id") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
					  ?>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Nama Produk
							</label>
							<div class="col-md-3 col-sm-3 col-xs-4">
							<select class="form-control" name="nama_produk" id="nama_produk">
								<option value="" disabled selected>-</option>
								<?php do { ?>
								<option value="<?=$row['nama_produk'];?>"><?=$row['nama_produk'];?></option>
								<?php } while ($row= mysqli_fetch_assoc($query));?>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_produk">
							No. Batch
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							<select class="form-control" name="id_produk" id="id_produk">
							
							</select>
							
							<script>
   
							$("#nama_produk").change(function(){
						   
								var idp = $("#nama_produk").val();
							   
								$.ajax({
									type: "POST",
									dataType: "html",
									url: "cari_produk.php",
									data: "nama_produk="+idp,
									success: function(msg){
										if(msg == ''){
											alert('Tidak ada data Produk');
										}
										else{
											$("#id_produk").html(msg);                                                     
										}
								}
								});    
							});
						</script>
							
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Jam
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="time" name="jam_pengaturan_suhu" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Ukuran
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
							  	<select class="form-control" name="ukuran">
								<option value="" disabled selected>-</option>
								<option value="12 x 250 gr">12 x 250 gr</option>
								<option value="3 x 1 Kg">3 x 1 Kg</option>
								<option value="4 x 1 Kg">4 x 1 Kg</option>
								<option value="1 x 5 Kg">1 x 5 Kg</option>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Zona 1
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							<select class="form-control" name="zona_1" id="zona_1">
								<option value="" disabled selected>-</option>
								<?php $c1=1; do { ?>
								<option value="<?=$c1;?>"><?=$c1;?></option>
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
								<option value="" disabled selected>-</option>
								<?php $c2=1; do { ?>
								<option value="<?=$c2;?>"><?=$c2;?></option>
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
								<option value="" disabled selected>-</option>
								<?php $c3=1; do { ?>
								<option value="<?=$c3;?>"><?=$c3;?></option>
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
								<option value="" disabled selected>-</option>
								<?php $c4=1; do { ?>
								<option value="<?=$c4;?>"><?=$c4;?></option>
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
