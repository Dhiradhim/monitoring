<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('header.html');
include('koneksi.php');
?>
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
                <h3>View Data M2M</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                      <?php
						$kd= $_GET['kd_m2m'];
						$svr = mysqli_query($con, "SELECT * FROM tb_m2m WHERE kd_m2m='$kd'") or die(mysqli_connect_error());
						$row_svr = mysqli_fetch_assoc($svr);
						$x = mysqli_num_rows($svr);
                                        $q_tr = mysqli_query($con, "SELECT * FROM tb_track WHERE kd_barang='$kd' ORDER BY kd_track ASC") or die(mysqli_connect_error());
                                        $row_tr = mysqli_fetch_assoc($q_tr);
                                        $run = mysqli_num_rows($q_tr);
					$q_tr2 = mysqli_query($con, "SELECT status_track FROM tb_track WHERE kd_barang='$kd' ORDER BY kd_track DESC") or die(mysqli_connect_error());
                                        $row_tr2 = mysqli_fetch_assoc($q_tr2);
                                        $run2 = mysqli_num_rows($q_tr2);
					$count=1;
					  ?>
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="m2m_proses_edit.php" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd">Kode M2M
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-4">
                          <input readonly="readonly" type="text" id="kd" name="kd"required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row_svr['kd_m2m']?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="merk">Merk
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="merk" name="merk" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row_svr['merk_m2m']?>">
                        </div>
			</div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Type 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="type" name="type" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row_svr['type_m2m']?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pn">Product Number
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="pn" name="pn" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row_svr['pn_m2m']?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sn">Serial Number
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="sn" name="sn" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row_svr['sn_m2m']?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sn">Status 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="sn" name="sn" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row_tr2['status_track']?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ket">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input readonly="readonly" type="text" id="ket" name="ket" class="form-control col-md-7 col-xs-12" value="<?php echo $row_svr['ket_m2m']?>">
                        </div>
                      </div>
						<div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-danger" type="button" onclick="window.history.back()">Back</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
		  		  <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Track M2M</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
			<table class="table table-hover">
			  <thead>
                <tr>    
					<th><div align="center" ><h6>No</h6></div></th>
					<th><div align="center" ><h6>Status</div></h6></th>
					<th><div align="center"><h6>Tanggal</div></h6></th>
					<th><div align="center"><h6>No. Surat</div></h6></th>
					<th><div align="center"><h6>Pengirim</div></h6></th>
					<th><div align="center"><h6>Penerima</div></h6></th>
					<th><div align="center"><h6>Penempatan</div></h6></th>
					<th><div align="center"><h6>Keterangan</div></h6></th>
                </tr>		

			  </thead>
				<tbody>
                <?php do { ?>
                  <tr>
		    <td><div align="center"><?php echo $count; ?></div></td>
                    <td><div align="center"><?php echo $row_tr['status_track']; ?></div></td>
                    <td><div align="center"><?php echo $row_tr['tanggal_track']; ?></div></td>
                    <td><div align="center"><?php echo $row_tr['no_surat_track']; ?></div></td>
 		    <td><div align="center"><?php echo $row_tr['pengirim_track']; ?> (<?php echo $row_tr['pic_kirim_track']; ?>)</div></td>
                    <td><div align="center"><?php echo $row_tr['penerima_track']; ?> (<?php echo $row_tr['pic_terima_track']; ?>)</div></td>
                    <td><div align="center"><?php echo $row_tr['place_track']; ?></div></td>
		    <td><div align="center"><?php echo $row_tr['keterangan_track']; ?></div></td>
                </tr>
                  <?php 
				  $count++;
				  } while ($row_tr = mysqli_fetch_assoc($q_tr)); 
				  ?>
				</tbody>  
             </table>
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="track_input.php" method="post">			 
                    <?php
						$kd= $_GET['kd_m2m'];
					  ?>
					<input type="hidden" id="kd" name="kd" value="<?php echo $kd ?>">
					<input type="hidden" id="tb" name="tb" value="m2m">
						<div class="form-group">
                        <div class="col-md-12">
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

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>	
  </body>
</html>
