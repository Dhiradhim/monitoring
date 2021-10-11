<?php
include "koneksi.php";
$id=$_POST['id'];
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
$nama_formen=$_POST['nama_formen'];
$nama_supervisor=$_POST['nama_supervisor'];

$query = "UPDATE metal_detector SET jam_metal_detector='$jam_metal_detector',feawal='$feawal',fetengah='$fetengah',feakhir='$feakhir',nonfeawal='$nonfeawal',nonfetengah='$nonfetengah',nonfeakhir='$nonfeakhir',ssawal='$ssawal',sstengah='$sstengah',ssakhir='$ssakhir',jumlah_oke='$jumlah_oke',jumlah_not_oke='$jumlah_not_oke',nama_formen='$nama_formen',nama_supervisor='$nama_supervisor' WHERE id='$id'";
echo $query;
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="metaldetector.php?page=1&count=1"</script>';
?>
