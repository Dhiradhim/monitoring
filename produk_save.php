<?php
include "koneksi.php";
$nama_produk= $_POST['nama_produk'];
$id_produk=$_POST['id_produk'];

$cek = "select id_produk FROM produk where id_produk='$id_produk'";
$rs = mysqli_query($con,$cek);

if (mysqli_num_rows($rs) > 0)
{
	echo "<script type='text/javascript'>alert('No Batch sudah ada di Database!!');</script>";
	echo '<script>window.history.back()</script>';	
}
else
{

$query = "INSERT into produk (id_produk, nama_produk) values ('$id_produk','$nama_produk')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="produk.php?page=1&count=1"</script>';
}?>
