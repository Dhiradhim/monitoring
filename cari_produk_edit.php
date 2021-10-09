<?php
    include "koneksi.php";
	$np=$_POST["nama_produk"];
	$query = mysqli_query($con, "SELECT * FROM batch where nama_produk='$np' ORDER BY id") or die(mysqli_connect_error());
	$row = mysqli_fetch_assoc($query);
	 do {
			// ?><option value="<?=$row['no_batch'];?>"><?=$row['no_batch'];?></option>
			<?php
		 } while ($row=mysqli_fetch_assoc($query));

?>