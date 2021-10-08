<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Input Hasil Cetak </title>
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
                <h3>Input Hasil Cetak</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div>
                <div class="x_panel">
                  <div class="x_content">
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="metaldetector_save.php" method="post">
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
							Tanggal
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							  <input type="date" name="tanggal_hasil_cetak" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Jam
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="time" name="jam_hasil_cetak" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Standar
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="input" id="standar" name="standar">
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Aktual
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="input" id="actual" name="actual">
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Start Downtime
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="time" name="start_downtime" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Stop Downtime
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="time" name="stop_downtime" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Deskripsi Downtime
							</label>
							<div class="col-md-4 col-sm-3 col-xs-4">
							  <input type="text" name="deskripsi_downtime" required="required" class="form-control col-md-7 col-xs-12" >
							</div>
					  </div>					  
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Tindakan Dilakukan
							</label>
							<div class="col-md-4 col-sm-3 col-xs-4">
							  <input type="text" name="tindakan_dilakukan" required="required" class="form-control col-md-7 col-xs-12" >
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Tindakan Pecegahan
							</label>
							<div class="col-md-4 col-sm-3 col-xs-4">
							  <input type="text" name="tindakan_pencegahan" required="required" class="form-control col-md-7 col-xs-12" >
							</div>
					  </div>
					  <?php
					  $nik=$_SESSION['nik'];
					  $query1 = mysqli_query($con, "SELECT username FROM login WHERE nik='$nik'") or die(mysqli_connect_error());
					  $row1 = mysqli_fetch_assoc($query1);
					  ?>
					  <input type="hidden" id="nama_operator" name="nama_operator" value="<?=$row1['username'];?>">
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
