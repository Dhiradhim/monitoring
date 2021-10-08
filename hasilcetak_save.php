<?php
include "koneksi.php";
$nama_produk= $_POST['nama_produk'];
$id_produk=$_POST['id_produk'];
$shift=$_POST['shift'];
$tanggal_hasil_cetak=$_POST['tanggal_hasil_cetak'];
$jam_hasil_cetak=$_POST['jam_hasil_cetak'];
$standar=$_POST['standar'];
$actual=$_POST['actual'];
$start_downtime=$_POST['start_downtime'];
$stop_downtime=$_POST['stop_downtime'];
$deskripsi_downtime=$_POST['deskripsi_downtime'];
$tindakan_dilakukan=$_POST['tindakan_dilakukan'];
$tindakan_pencegahan=$_POST['tindakan_pencegahan'];

$query = "INSERT into metal_detector (id_produk,nama_produk,shift,tanggal_hasil_cetak,jam_hasil_cetak,standar,actual,start_downtime,stop_downtime,deskripsi_downtime,tindakan_dilakukan,tindakan_pencegahan,nama_supervisor) values ('$id_produk','$nama_produk','$shift','$tanggal_hasil_cetak','$jam_hasil_cetak','$standar','$actual','$start_downtime','$stop_downtime','$deskripsi_downtime','$tindakan_dilakukan','$tindakan_pencegahan','$nama_supervisor')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="metaldetector.php?page=1&count=1"</script>';
?>
