<!DOCTYPE html>
<html lang="en">
<head>
	<script language="javascript" src="jquery-1.3.2.js"></script>
	<script>
		$(document).ready(function(){
			
		});
		function ambil_barang(nm_barang){
			$.ajax({
				url: "getcustsi.php?nama="+nm_barang,
				success: function(msg){
					$('.barang').html(msg);
				},
				dataType: "html"
			});
		}
                function ambil_barang1(nm_barang1){
                        $.ajax({
                                url: "getcustsi1.php?nama="+nm_barang1,
                                success: function(msg){
                                        $('.barang1').html(msg);
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
                <h3>Input Service Inquiry</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                     	<?php
                       	$q_cust = mysqli_query ($con, "SELECT nama FROM tb_cust");
                       	$data_nama = mysqli_fetch_assoc($q_cust);
			$sascm = $_GET['sascm'];
			$q_si= mysqli_query($con, "SELECT nosi FROM tb_si WHERE sascm='$sascm'");
			$no_si = mysqli_num_rows($q_si);
			$query=mysqli_query($con, "SELECT * FROM tb_kantor");
			$query1=mysqli_query($con, "SELECT * FROM tb_kantor");
			$data_kantor = mysqli_fetch_assoc($query);
			$data_kantor1 = mysqli_fetch_assoc($query1);
			$number = $no_si+1;
			?>
			<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="savesi.php" method="post">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nosi">No. Service Inquiry<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
                          <input readonly="readonly" type="text" id="nosi" name="nosi"  class="form-control col-md-7 col-xs-12" value="SI.<?=date('Y')?>-<?=date('m')?>/HUB-<?=$sascm?>/<?=str_pad($number, 4, '0', STR_PAD_LEFT)?>">
                          <input type="hidden" id="sascm" name="sascm"  class="form-control col-md-7 col-xs-12" value="<?=$sascm?>">
                        </div>
                      </div>
		  <div class="form-group">
			  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal SI<span class="required">*</span>
                        </label>
                      <div class="col-md-2 col-sm-2 col-xs-12">
					  
			<div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_3 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>

                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div>
                                <input type="text" name="tanggal" class="form-control has-feedback-left" id="single_cal3" placeholder="First Name" aria-describedby="inputSuccess2Status3">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
		  </div>
                          <?if ($sascm == "SCM")
				{?>
				<?}
			  else
				{?>
				<div class="form-group">
                        		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nosi">No. SPK<span class="required">*</span></label>
                        		<div class="col-md-3 col-sm-3 col-xs-4">
						<input type="text" id="nospk" name="nospk"  class="form-control col-md-7 col-xs-12">
	                        	</div>
                      		</div>

				<? } ?>
                          <?if ($sascm == "SCM")
                                {?>
                                <?}
                          else
                                {?>
		  <div class="form-group">
			  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Tanggal SPK<span class="required">*</span>
                        </label>
                      <div class="col-md-2 col-sm-2 col-xs-12">
					  
			<div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_3 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>

                        <fieldset>
                          <div class="control-group">
                            <div class="controls">
                              <div>
                                <input type="text" name="tglspk" class="form-control has-feedback-left" id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status3">
                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
		  </div>
                                <? } ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Customer <span class="required">*</span></label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
                          <select class="form-control" id="nama" name="nama" onchange="ambil_barang($(this).val())">
                                <option value="-">-</option>
				<?php
				do {?> 
				<option value="<?php echo $data_nama['nama'];?>"><?php echo $data_nama['nama'];?></option>
				<?php
				} while ($data_nama = mysqli_fetch_assoc($q_cust));
			  ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
		       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deliv">Deliver to <span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-4">
                          <select class="form-control" id="deliv" name="deliv">
                                <option value="-">-</option>
                            <?php
                                do {?>
                                <option value="<?php echo $data_kantor['id_kantor'];?>"><?=$data_kantor['id_cust']?> || <?php echo $data_kantor['kantor'];?>, <?=$data_kantor['alamatkantor']?>, <?=$data_kantor['kotakantor']?></option>
                                <?php
                                } while ($data_kantor = mysqli_fetch_assoc($query));
                            ?>
                          </select>
                        </div>
		      </div>
                      <div class="form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="install">Install at <span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-4">
                          <select class="form-control" id="install" name="install">
                                <option value="-">-</option>
                            <?php
                                do {?>
                                <option value="<?php echo $data_kantor1['id_kantor'];?>"><?=$data_kantor1['id_cust']?> || <?php echo $data_kantor1['kantor'];?>, <?=$data_kantor1['alamatkantor']?>, <?=$data_kantor1['kotakantor']?></option>
                                <?php
                                } while ($data_kantor1 = mysqli_fetch_assoc($query1));
                            ?>
                          </select>
                        </div>
                      </div>
					  <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpm">Action</label>
					  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="checkbox" name="action[]" id="action1" value="Demo" class="flat" /> Demo
						<br />
                        <input type="checkbox" name="action[]" id="action2" value="Repair" class="flat" /> Repair
                        <br />
                        <input type="checkbox" name="action[]" id="action3" value="Delivery" class="flat" /> Delivery
						<br />
                        <input type="checkbox" name="action[]" id="action4" value="Migrasi" class="flat" /> Migrasi
                        <br />
						<input type="checkbox" name="action[]" id="action5" value="Installation" class="flat" /> Installation
						<br />
                        <input type="checkbox" name="action[]" id="action6" value="Relokasi" class="flat" /> Relokasi
                        <br />
                        <p>
						</div>
						</div>
                    <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang1">Barang 1 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nama Barang" id="namabarang1" name="namabarang1">
						</div>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="qt1" name="qt1" placeholder="Qty" class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang1">
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Serial Number" id="sn1" name="sn1">
						</div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Product Number" id="pn1" name="pn1">
                        </div>
						<div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="unit1" name="unit1" placeholder="Unit"  class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang1">
					 </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
						<textarea type="text" id="remark1" name="remark1" placeholder="Remark"  class="form-control"></textarea>
						<br>
                      </div>

                    <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang2">Barang 2 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nama Barang" id="namabarang2" name="namabarang2">
						</div>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="qt2" name="qt2" placeholder="Qty" class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang2">
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Serial Number" id="sn2" name="sn2">
						</div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Product Number" id="pn2" name="pn2">
                        </div>
						<div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="unit2" name="unit2" placeholder="Unit"  class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang2">
					 </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
						<textarea type="text" id="remark2" name="remark2" placeholder="Remark"  class="form-control"></textarea>
						<br>
                      </div>

                    <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang3">Barang 3 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nama Barang" id="namabarang3" name="namabarang3">
						</div>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="qt3" name="qt3" placeholder="Qty" class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang3">
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Serial Number" id="sn3" name="sn3">
						</div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Product Number" id="pn3" name="pn3">
                        </div>
						<div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="unit3" name="unit3" placeholder="Unit"  class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang3">
					 </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
						<textarea type="text" id="remark3" name="remark3" placeholder="Remark"  class="form-control"></textarea>
						<br>
                      </div>

					 <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang4">Barang 4 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nama Barang" id="namabarang4" name="namabarang4">
						</div>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="qt4" name="qt4" placeholder="Qty" class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang4">
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Serial Number" id="sn4" name="sn4">
						</div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Product Number" id="pn4" name="pn4">
                        </div>
						<div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="unit4" name="unit4" placeholder="Unit"  class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang4">
					 </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
						<textarea type="text" id="remark4" name="remark4" placeholder="Remark"  class="form-control"></textarea>
						<br>
                      </div>

					 <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang5">Barang 5 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nama Barang" id="namabarang5" name="namabarang5">
						</div>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="qt5" name="qt5" placeholder="Qty" class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang5">
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Serial Number" id="sn5" name="sn5">
						</div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Product Number" id="pn5" name="pn5">
                        </div>
						<div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="unit5" name="unit5" placeholder="Unit"  class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang5">
					 </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
						<textarea type="text" id="remark5" name="remark5" placeholder="Remark"  class="form-control"></textarea>
						<br>
                      </div>

					 <div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang6">Barang 6 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Nama Barang" id="namabarang6" name="namabarang6">
						</div>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="qt6" name="qt6" placeholder="Qty" class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang6">
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Serial Number" id="sn6" name="sn6">
						</div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
						  <input type="text" class="form-control" placeholder="Product Number" id="pn6" name="pn6">
                        </div>
						<div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="unit6" name="unit6" placeholder="Unit"  class="form-control col-md-1 col-xs-12">
                        </div>
                      </div>
					 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang6">
					 </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
						<textarea type="text" id="remark6" name="remark6" placeholder="Remark"  class="form-control"></textarea>
						<br>
                      </div>
					 
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="approvedby">Approved by <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
                          <input type="text" id="approvedby" name="approvedby" required="required" class="form-control col-md-7 col-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pickupby">Pick Up by <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-4">
                          <input type="text" id="pickupby" name="pickupby" required="required" class="form-control col-md-7 col-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-danger" type="button" onclick="window.history.back()">Cancel</button>
			  <button class="btn btn-primary" type="reset">Reset</button>
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

