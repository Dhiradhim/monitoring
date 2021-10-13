<?php
include "koneksi.php";
$shift=$_POST['shift'];
$nama_produk= $_POST['nama_produk'];
$id_produk=$_POST['id_produk'];
$berat=$_POST['berat'];


$query = "INSERT into berat_timbangan (id_produk,nama_produk,shift,berat) values ('$id_produk','$nama_produk','$shift','$berat')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="berattimbangan.php?page=1&count=1"</script>';
?>
