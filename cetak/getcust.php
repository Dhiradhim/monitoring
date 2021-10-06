<?php
include("../koneksi.php");
$id = $_GET['nama'];
$query=mysqli_query($con, "SELECT * FROM tb_kantor WHERE id_cust='$id'");
$data_kantor = mysqli_fetch_assoc($query);?>

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kantor">Kantor <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-4">
                          <select class="form-control" id="kantor" name="kantor" >
                                <option value="-">-</option>
                            <?php
                                do {?>
                                <option value="<?php echo $data_kantor['kantor'];?>"><?php echo $data_kantor['kantor'];?>, <?=$data_kantor['alamatkantor']?>, <?=$data_kantor['kotakantor']?></option>
                                <?php
                                } while ($data_kantor = mysqli_fetch_assoc($query));
                            ?>
                          </select>
                        </div>
