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
							Jam
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="time" name="jam_metal_detector" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Fe 1,5 mm
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="feawal" name="feawal" value="y"> Awal
							</select>
							</div>
					  </div>
					  <div class="form-group">
					  		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk"> </label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="fetengah" name="fetengah" value="y"> Tengah
							</select>
							</div>
					  </div>
					  <div class="form-group">
					  		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk"> </label>					  
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="feakhir" name="feakhir" value="y"> Akhir
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Non Fe 2,0 mm
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="nonfeawal" name="nonfeawal" value="y"> Awal
							</select>
							</div>
					  </div>
					  <div class="form-group">
					  		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk"> </label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="nonfetengah" name="nonfetengah" value="y"> Tengah
							</select>
							</div>
					  </div>
					  <div class="form-group">
					  		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk"> </label>					  
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="nonfeakhir" name="nonfeakhir" value="y"> Akhir
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							SS 2,0 mm
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="ssawal" name="ssawal" value="y"> Awal
							</select>
							</div>
					  </div>
					  <div class="form-group">
					  		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk"> </label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="sstengah" name="sstengah" value="y"> Tengah
							</select>
							</div>
					  </div>
					  <div class="form-group">
					  		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk"> </label>					  
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input type="checkbox" id="ssakhir" name="ssakhir" value="y"> Akhir
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
							<select class="form-control" name="nama_formen" id="nama_formen">
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
							<select class="form-control" name="nama_supervisor" id="nama_supervisor">
								<option value="" disabled selected>-</option>
								<?php do { ?>
								<option value="<?=$row2['username'];?>"><?=$row2['username'];?></option>
								<?php } while ($row2= mysqli_fetch_assoc($query2));?>
							</select>
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
