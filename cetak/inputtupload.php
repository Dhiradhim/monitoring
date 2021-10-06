<!DOCTYPE html>
<html lang="en">
<head>
	<script language="javascript" src="jquery-1.3.2.js"></script>
	<script>
		$(document).ready(function(){
			
		});
		function ambil_barang(nm_barang){
			$.ajax({
				url: "getcust.php?nama="+nm_barang,
				success: function(msg){
					$('.barang').html(msg);
				},
				dataType: "html"
			});
		}
                function get_barang1(get1){
                        $.ajax({
                                url: "get"+get1+".php?id=1",
                                success: function(msg){
                                        $('.get1').html(msg);
                                },
                                dataType: "html"
                        });
                }
                function get_barang2(get2){
                        $.ajax({
                                url: "get"+get2+".php?id=2",
                                success: function(msg){
                                        $('.get2').html(msg);
                                },
                                dataType: "html"
                        });
                }
                function get_barang3(get3){
                        $.ajax({
                                url: "get"+get3+".php?id=3",
                                success: function(msg){
                                        $('.get3').html(msg);
                                },
                                dataType: "html"
                        });
                }
                function get_barang4(get4){
                        $.ajax({
                                url: "get"+get4+".php?id=4",
                                success: function(msg){
                                        $('.get4').html(msg);
                                },
                                dataType: "html"
                        });
                }
                function get_barang5(get5){
                        $.ajax({
                                url: "get"+get5+".php?id=5",
                                success: function(msg){
                                        $('.get5').html(msg);
                                },
                                dataType: "html"
                        });
                }
                function get_barang6(get6){
                        $.ajax({
                                url: "get"+get6+".php?id=6",
                                success: function(msg){
                                        $('.get6').html(msg);
                                },
                                dataType: "html"
                        });
                }
                function get_barang7(get7){
                        $.ajax({
                                url: "get"+get7+".php?id=7",
                                success: function(msg){
                                        $('.get7').html(msg);
                                },
                                dataType: "html"
                        });
                }

	</script>
<?php
include('header.html');
include('../koneksi.php');
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
                <h3>Input Delivery Note</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                     	<?php
						$idtt = $_GET['id_tt'];
						$q_tt= mysqli_query($con, "SELECT * FROM tb_tt WHERE id_tt='$idtt'");
						$row = mysqli_fetch_assoc($q_tt);
			?>
			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="savettupload.php" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nodn">No. Tanda Terima
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
                          <input readonly="readonly" type="text" id="nott" name="nott" required="required" class="form-control col-md-7 col-xs-12" value="<?=$row['nott']?>">
                          <input type="hidden" id="id" name="id" required="required" class="form-control col-md-7 col-xs-12" value="<?=$row['id_tt']?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nodn">Tanggal
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
                          <input readonly="readonly" type="text" id="nott" name="nott" required="required" class="form-control col-md-7 col-xs-12" value="<?=$row['tanggal']?>">
                        </div>
                      </div>                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nodn">Dari
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
                          <input readonly="readonly" type="text" id="nott" name="nott" required="required" class="form-control col-md-7 col-xs-12" value="<?=$row['dari']?>">
                        </div>
                      </div>
                      <div class="form-group">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nodn">Kepada
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
                          <input readonly="readonly" type="text" id="nott" name="nott" required="required" class="form-control col-md-7 col-xs-12" value="<?=$row['kepada']?>">
                        </div>
                      </div>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="keterangan">Keterangan
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
						<textarea readonly="readonly" type="text" id="keterangan" name="keterangan" class="form-control"><?=$row['keterangan']?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="upload">Upload File <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
						<input type="file" class="form-control" name="upload">
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
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
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

