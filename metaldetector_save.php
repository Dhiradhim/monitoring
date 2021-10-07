<?php
include "koneksi.php";
$nama_produk= $_POST['nama_produk'];
$id_produk=$_POST['id_produk'];
$shift=$_POST['shift'];
$tanggal_metal_detector=$_POST['tanggal_metal_detector'];
$jam_metal_detector=$_POST['jam_metal_detector'];
$awal=$_POST['awal'];
$tengah=$_POST['tengah'];
$akhir=$_POST['akhir'];
$jumlah_oke=$_POST['jumlah_oke'];
$jumlah_not_oke=$_POST['jumlah_not_oke'];
$nama_operator=$_POST['nama_operator'];
$nama_formen=$_POST['nama_formen'];
$nama_supervisor=$_POST['nama_supervisor'];

$query = "INSERT into metal_detector (id_produk,nama_produk,shift,tanggal_metal_detector,jam_metal_detector,awal,tengah,akhir,jumlah_oke,jumlah_not_oke,nama_operator,nama_formen,nama_supervisor) values ('$id_produk','$nama_produk','$shift','$tanggal_metal_detector','$jam_metal_detector','$awal','$tengah','$akhir','$jumlah_oke','$jumlah_not_oke','$nama_operator','$nama_formen','$nama_supervisor')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="metaldetector.php?page=1&count=1"</script>';
?>
