<?php
include("../koneksi.php");
$id = $_GET['id'];
$q_mmr_svr="SELECT kd_mmr_svr, sn_mmr_svr, pn_mmr_svr FROM tb_mmr_svr";
$mmr_svr = mysqli_query($con, $q_mmr_svr);
$row_mmr_svr = mysqli_fetch_assoc($mmr_svr);?>

			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="namabarang<?=$id?>">Nama Barang <?=$id?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="namabarang<?=$id?>" name="namabarang<?=$id?>">
				<option value="-">-</option>
                            <?php
				
                                do {?>
                                <option value="<?php echo $row_mmr_svr['kd_mmr_svr'];?>"><?php echo $row_mmr_svr['kd_mmr_svr'];?> (SN : <?php echo $row_mmr_svr['sn_mmr_svr'];?> | PN : <?=$row_mmr_svr['pn_mmr_svr']?>)</option>
                                <?php
                                } while ($row_mmr_svr = mysqli_fetch_assoc($mmr_svr));
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




