<?php
include "koneksi.php";
$nama_produk= $_POST['nama_produk'];
$no_batch=$_POST['no_batch'];

$cek = "select no_batch FROM batch where no_batch='$no_batch'";
$rs = mysqli_query($con,$cek);

if (mysqli_num_rows($rs) > 0)
{
	echo "<script type='text/javascript'>alert('No Batch $no_batch sudah ada di Database!!');</script>";
	echo '<script>window.history.back()</script>';	
}
else
{

$query = "INSERT into batch (no_batch, nama_produk) values ('$no_batch','$nama_produk')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="batch.php?page=1&count=1"</script>';
}?>
