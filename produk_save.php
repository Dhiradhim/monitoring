<?php
include "koneksi.php";
$nama_produk= $_POST['nama_produk'];

$cek = "select nama_produk FROM produk where nama_produk='$nama_produk'";
$rs = mysqli_query($con,$cek);

if (mysqli_num_rows($rs) > 0)
{
	echo "<script type='text/javascript'>alert('Nama Produk $nama_produk sudah ada di Database!!');</script>";
	echo '<script>window.history.back()</script>';	
}
else
{

$query = "INSERT into produk (nama_produk) values ('$nama_produk')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="batch_input.php"</script>';
}?>
