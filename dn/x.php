<!DOCTYPE html>
<html>
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
	</script>

        <title>Ajax Jquery - Belajarphp.net</title>
    </head>
    <body>
                     	<?php
			include("../koneksi.php");
                       	$q_cust = mysqli_query ($con, "SELECT nama FROM tb_cust");
                       	$data_nama = mysqli_fetch_assoc($q_cust);
			?>
        <form action="">
            <table>
                         <tr><td>Customer</td><td><select class="form-control" id="nama" name="nama" onchange="ambil_barang($(this).val())" onkeyup="isi_otomatis()">
                                <option value="-">-</option>
				<?php
				do {?> 
				<option value="<?php echo $data_nama['nama'];?>"><?php echo $data_nama['nama'];?></option>
				<?php
				} while ($data_nama = mysqli_fetch_assoc($q_cust));
			  ?>
                          </select></td></tr>
<tr><td>Kantor</td><td>
<div class="barang"></div>
</td></tr>
                <tr><td>Alamat Kantor</td><td><input type="text" id="alamatkantor" disable="disable"></td></tr>
                <tr><td>Kota kantor</td><td><input type="text" id="kotakantor" disable="disable"></td></tr>
            </table>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var nama = $("#nama").val();
                var kantor = $("#kantor").val();
                $.ajax({
                    url: 'proses-ajax.php',
                    data:"id_cust="+nama+"&kantor="+kantor ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#alamatkantor').val(obj.alamatkantor);
                    $('#kotakantor').val(obj.kotakantor);
                });
            }
        </script>
    </body>
</html>
