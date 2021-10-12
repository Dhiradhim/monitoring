<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');?>
<title> Tambah User </title>
<?php
include('koneksi.php');
?>
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
                <h3>Tambah User</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div>
                <div class="x_panel">
                  <div class="x_content">
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="register_edit_save.php" method="post">
							<?php
							  $id=$_GET['id'];
							  $query = mysqli_query($con, "SELECT * FROM login WHERE id=$id") or die(mysqli_connect_error());
							  $row = mysqli_fetch_assoc($query);
							?>
                      <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Username
							</label>
							<div class="col-md-3 col-sm-3 col-xs-4">
							<input type="text" name="username" required="required" class="form-control col-md-7 col-xs-12" value=<?=$row['username'];?> autofocus>
							<input type="hidden" name="id" required="required" class="form-control col-md-7 col-xs-12" value=<?=$row['id'];?>>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							NIK
							</label>
							<div class="col-md-3 col-sm-3 col-xs-4">
							<input type="text" name="nik" required="required" class="form-control col-md-7 col-xs-12" value=<?=$row['nik'];?> autofocus>
							</div>
					  </div>
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_produk">
							Jabatan
							</label>
							<div class="col-md-3 col-sm-3 col-xs-3">
							  	<select class="form-control" name="jabatan">
								<option <?php if( $row['jabatan']=='administrator'){echo "selected"; } ?> value="administrator">Administrator</option>
								<option <?php if( $row['jabatan']=='operator'){echo "selected"; } ?> value="operator">Operator</option>
								<option <?php if( $row['jabatan']=='formen'){echo "selected"; } ?> value="formen">Formen</option>
								<option <?php if( $row['jabatan']=='supervisor'){echo "selected"; } ?> value="supervisor">Supervisor</option>
							</select>
							</div>
					  </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="new">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="password" id="new" name="pass" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rep">Repeat Password <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="password" id="rep" name="rep" class="form-control col-md-7 col-xs-12">
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
