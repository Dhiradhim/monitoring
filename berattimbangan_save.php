<?php
include "koneksi.php";
$id_produk=$_POST['id_produk'];
$query = mysqli_query($con, "SELECT tanggal_batch,shift FROM batch WHERE no_batch=$id_produk") or die(mysqli_connect_error());
$row = mysqli_fetch_assoc($query);
$shift=$row['shift'];
$tanggal_berat_timbangan=$row['tanggal_batch'];

$nama_produk= $_POST['nama_produk'];
$id_produk=$_POST['id_produk'];
$jam_timbangan=$_POST['jam_timbangan'];
$berat=$_POST['berat'];


$query = "INSERT into berat_timbangan (id_produk,nama_produk,shift,tanggal_berat_timbangan,jam_timbangan,berat) values ('$id_produk','$nama_produk','$shift','$tanggal_berat_timbangan','$jam_timbangan','$berat')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="berattimbangan.php?page=1&count=1"</script>';
?>
