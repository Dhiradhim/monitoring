<html>
<head>
	<title>Combo Dinamis</title>
	<script language="javascript" src="jquery-1.3.2.js"></script>
	<script>
		$(document).ready(function(){
			
		});
		function ambil_barang(nm_barang){
			$.ajax({
				url: "get"+nm_barang+".php",
				success: function(msg){
					$('.barang').html(msg);
				},
				dataType: "html"
			});
		}
	</script>
</head>
<body>
<?php
include("../koneksi.php");
echo "<select name='tipe' onchange='ambil_barang($(this).val())'>";
	echo "<option value=''>- PILIH TIPE BARANG-</option>";
	echo "<option value='server'>Server</option>";
	echo "<option value='router'>Router</option>";
echo "</select>";
?>
<div class="barang"></div>
</body>
</html>
