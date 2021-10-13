<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Edit Metal Detector </title>
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
                <h3>Edit Metal Detector</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div>
                <div class="x_panel">
                  <div class="x_content">
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="metaldetector_edit_save.php" method="post">
					  <?php
						include('koneksi.php');
						$id=$_GET['id'];
						$query = mysqli_query($con, "SELECT * FROM metal_detector WHERE id=$id") or die(mysqli_connect_error());
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
							<div class="col-md-1 col-sm-2 col-xs-2">
							  	<select class="form-control" name="shift">
								<option <?php if( $row['shift']=='1'){echo "selected"; } ?> value="1">1</option>
								<option <?php if( $row['shift']=='2'){echo "selected"; } ?> value="2">2</option>
								<option <?php if( $row['shift']=='3'){echo "selected"; } ?> value="2">3</option>
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Tanggal
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							  <input type="date" disabled value='<?=$row['tanggal_metal_detector']?>' name="tanggal_metal_detector" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Jam
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="time" disabled value='<?=$row['jam_metal_detector']?>' name="jam_metal_detector" required="required" class="form-control col-md-7 col-xs-12">
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							FE 1,5 mm
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input <?php if ($row['feawal']=='y') { echo 'checked';} ?> type="checkbox" id="awal" name="feawal" value="y"> Awal
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							 
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input <?php if ($row['fetengah']=='y') { echo 'checked';} ?> type="checkbox" id="tengah" name="fetengah" value="y"> Tengah
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input <?php if ($row['feakhir']=='y') { echo 'checked';} ?> type="checkbox" id="akhir" name="feakhir" value="y"> Akhir
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							NON FE 2,0 mm
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input <?php if ($row['nonfeawal']=='y') { echo 'checked';} ?> type="checkbox" id="awal" name="nonfeawal" value="y"> Awal
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input <?php if ($row['nonfetengah']=='y') { echo 'checked';} ?> type="checkbox" id="tengah" name="nonfetengah" value="y"> Tengah
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input <?php if ($row['nonfeakhir']=='y') { echo 'checked';} ?> type="checkbox" id="akhir" name="nonfeakhir" value="y"> Akhir
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							SS 2,0 mm
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input <?php if ($row['ssawal']=='y') { echo 'checked';} ?> type="checkbox" id="awal" name="ssawal" value="y"> Awal
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input <?php if ($row['sstengah']=='y') { echo 'checked';} ?> type="checkbox" id="tengah" name="sstengah" value="y"> Tengah
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							
							</label>
							<div class="col-md-1 col-sm-2 col-xs-2">
								<input <?php if ($row['ssakhir']=='y') { echo 'checked';} ?> type="checkbox" id="akhir" name="ssakhir" value="y"> Akhir
							</select>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Jumlah Oke
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="text" value='<?=$row['jumlah_oke']?>' name="jumlah_oke" required="required" class="form-control col-md-7 col-xs-12" autofocus>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Jumlah Not Oke
							</label>
							<div class="col-md-1 col-sm-3 col-xs-4">
							  <input type="text" value='<?=$row['jumlah_not_oke']?>' name="jumlah_not_oke" required="required" class="form-control col-md-7 col-xs-12" autofocus>
							</div>
					  </div>
                      <div class="form-group">
					  <?php
						$query2 = mysqli_query($con, "SELECT * FROM login WHERE jabatan='formen'") or die(mysqli_connect_error());
						$row2 = mysqli_fetch_assoc($query2);
					  ?>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Nama Formen
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							<select class="form-control" name="nama_formen" id="nama_formen">
								<?php do { ?>
								<option <?php if( $row['nama_formen']==$row2['username']){ echo 'selected'; }?> value="<?=$row2['username'];?>"><?=$row2['username'];?></option>
								<?php } while ($row2=mysqli_fetch_assoc($query2));?>
							</select>
							</div>
					  </div>
                      <div class="form-group">
					  <?php
						include('koneksi.php');
						$query3 = mysqli_query($con, "SELECT * FROM login WHERE jabatan='supervisor'") or die(mysqli_connect_error());
						$row3 = mysqli_fetch_assoc($query3);
					  ?>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Nama Supervisor
							</label>
							<div class="col-md-2 col-sm-3 col-xs-4">
							<select class="form-control" name="nama_supervisor" id="nama_supervisor">
								<?php do { ?>
								<option <?php if( $row['nama_supervisor']==$row3['username']){echo "selected";}?> value="<?=$row3['username'];?>"><?=$row3['username'];?></option>
								<?php } while ($row3= mysqli_fetch_assoc($query3));?>
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
