<?php
include("../koneksi.php");
$id = $_GET['id'];
$q_rf_hub="SELECT kd_rf_hub, sn_rf_hub, pn_rf_hub, type_rf_hub FROM tb_rf_hub";
$rf_hub = mysqli_query($con, $q_rf_hub);
$row_rf_hub = mysqli_fetch_assoc($rf_hub);?>

			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang<?=$id?>">Nama Barang <?=$id?> <span class="required">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <select class="form-control" id="namabarang<?=$id?>" name="namabarang<?=$id?>">
				<option value="-">-</option>
                            <?php
				
                                do {?>
                                <option value="<?php echo $row_rf_hub['kd_rf_hub'];?>"><?php echo $row_rf_hub['kd_rf_hub'];?> / <?=$row_rf_hub['type_rf_hub']?>(SN : <?php echo $row_rf_hub['sn_rf_hub'];?> | PN : <?=$row_rf_hub['pn_rf_hub']?>)</option>
                                <?php
                                } while ($row_rf_hub = mysqli_fetch_assoc($rf_hub));
                            ?>
                          </select>
<br>
                          <textarea type="text" id="remark<?=$id?>" name="remark<?=$id?>" placeholder="Remark" required="required" class="form-control col-md-5 col-xs-12"></textarea>
			</div>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="qt<?=$id?>" name="qt<?=$id?>" placeholder="Qty"required="required" class="form-control col-md-1 col-xs-12">
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-12">
                          <input type="text" id="unit<?=$id?>" name="unit<?=$id?>" placeholder="Unit"required="required" class="form-control col-md-1 col-xs-12">
                        </div>




