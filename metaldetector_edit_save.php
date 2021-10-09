<?php
include "koneksi.php";
$id=$_POST['id'];
$tanggal_metal_detector=$_POST['tanggal_metal_detector'];
$jam_metal_detector=$_POST['jam_metal_detector'];
$awal=$_POST['awal'];
$tengah=$_POST['tengah'];
$akhir=$_POST['akhir'];
$jumlah_oke=$_POST['jumlah_oke'];
$jumlah_not_oke=$_POST['jumlah_not_oke'];
$nama_formen=$_POST['nama_formen'];
$nama_supervisor=$_POST['nama_supervisor'];

$query = "UPDATE metal_detector SET tanggal_metal_detector='$tanggal_metal_detector',jam_metal_detector='$jam_metal_detector',awal='$awal',tengah='$tengah',akhir='$akhir',jumlah_oke='$jumlah_oke',jumlah_not_oke='$jumlah_not_oke',nama_formen='$nama_formen',nama_supervisor='$nama_supervisor' WHERE id='$id'";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="metaldetector.php?page=1&count=1"</script>';
?>
