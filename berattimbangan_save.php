<?php
include "koneksi.php";
$nama_produk= $_POST['nama_produk'];
$id_produk=$_POST['id_produk'];
$shift=$_POST['shift'];
$tanggal_berat_timbangan=$_POST['tanggal_berat_timbangan'];
$jam_timbangan=$_POST['jam_timbangan'];
$berat=$_POST['berat'];


$query = "INSERT into berat_timbangan (id_produk,nama_produk,shift,tanggal_berat_timbangan,jam_timbangan,berat) values ('$id_produk','$nama_produk','$shift','$tanggal_berat_timbangan','$jam_timbangan','$berat')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="berattimbangan.php?page=1&count=1"</script>';
?>
