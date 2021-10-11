<?php
include "koneksi.php";
$id_produk=$_POST['id_produk'];
$query = mysqli_query($con, "SELECT tanggal_batch,shift FROM batch WHERE no_batch=$id_produk") or die(mysqli_connect_error());
$row = mysqli_fetch_assoc($query);
$shift=$row['shift'];
$tanggal_metal_detector=$row['tanggal_batch'];

$nama_produk= $_POST['nama_produk'];
$id_produk=$_POST['id_produk'];
$jam_metal_detector=$_POST['jam_metal_detector'];
$feawal=$_POST['feawal'];
$fetengah=$_POST['fetengah'];
$feakhir=$_POST['feakhir'];
$nonfeawal=$_POST['nonfeawal'];
$nonfetengah=$_POST['nonfetengah'];
$nonfeakhir=$_POST['nonfeakhir'];
$ssawal=$_POST['ssawal'];
$sstengah=$_POST['sstengah'];
$ssakhir=$_POST['ssakhir'];
$jumlah_oke=$_POST['jumlah_oke'];
$jumlah_not_oke=$_POST['jumlah_not_oke'];
$nama_operator=$_POST['nama_operator'];
$nama_formen=$_POST['nama_formen'];
$nama_supervisor=$_POST['nama_supervisor'];

$query = "INSERT into metal_detector (id_produk,nama_produk,shift,tanggal_metal_detector,jam_metal_detector,feawal,fetengah,feakhir,nonfeawal,nonfetengah,nonfeakhir,ssawal,sstengah,ssakhir,jumlah_oke,jumlah_not_oke,nama_operator,nama_formen,nama_supervisor) values ('$id_produk','$nama_produk','$shift','$tanggal_metal_detector','$jam_metal_detector','$feawal','$fetengah','$feakhir','$nonfeawal','$nonfetengah','$nonfeakhir','$ssawal','$sstengah','$ssakhir','$jumlah_oke','$jumlah_not_oke','$nama_operator','$nama_formen','$nama_supervisor')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="metaldetector.php?page=1&count=1"</script>';
?>
