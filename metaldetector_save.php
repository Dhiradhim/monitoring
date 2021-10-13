<?php
include "koneksi.php";
$shift=$row['shift'];
$nama_produk= $_POST['nama_produk'];
$id_produk=$_POST['id_produk'];
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

$query = "INSERT into metal_detector (id_produk,nama_produk,shift,feawal,fetengah,feakhir,nonfeawal,nonfetengah,nonfeakhir,ssawal,sstengah,ssakhir,jumlah_oke,jumlah_not_oke,nama_operator,nama_formen,nama_supervisor) values ('$id_produk','$nama_produk','$shift','$feawal','$fetengah','$feakhir','$nonfeawal','$nonfetengah','$nonfeakhir','$ssawal','$sstengah','$ssakhir','$jumlah_oke','$jumlah_not_oke','$nama_operator','$nama_formen','$nama_supervisor')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="metaldetector.php?page=1&count=1"</script>';
?>
