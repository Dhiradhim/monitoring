<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Input Metal Detector </title>
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
                <h3>Input Metal Detector</h3>
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
							Shift
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
							  	<select class="form-control" name="shift">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Awal
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="awal" name="awal" value="y"> Oke
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Tengah
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="tengah" name="tengah" value="y"> Oke
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Akhir
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="akhir" name="akhir" value="y"> Oke
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Jumlah Oke
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="text" name="jumlah_oke" required="required" class="form-control col-md-7 col-xs-12" autofocus>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Jumlah Not Oke
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="text" name="jumlah_not_oke" required="required" class="form-control col-md-7 col-xs-12" autofocus>
							</div>
					  </div>
                      <div class="form-group">
					  <?php
						include('koneksi.php');
						$query = mysqli_query($con, "SELECT * FROM login WHERE jabatan='Formen'") or die(mysqli_connect_error());
						$row = mysqli_fetch_assoc($query);
					  ?>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Nama Formen
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							<select class="form-control" name="formen" id="formen">
								<option value="" disabled selected>-</option>
								<?php do { ?>
								<option value="<?=$row['username'];?>"><?=$row['username'];?></option>
								<?php } while ($row= mysqli_fetch_assoc($query));?>
							</select>
							</div>
					  </div>
                      <div class="form-group">
					  <?php
						include('koneksi.php');
						$query2 = mysqli_query($con, "SELECT * FROM login WHERE jabatan='Supervisor'") or die(mysqli_connect_error());
						$row2 = mysqli_fetch_assoc($query2);
					  ?>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Nama Supervisor
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							<select class="form-control" name="supervisor" id="supervisor">
								<option value="" disabled selected>-</option>
								<?php do { ?>
								<option value="<?=$row2['username'];?>"><?=$row2['username'];?></option>
								<?php } while ($row2= mysqli_fetch_assoc($query2));?>
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
