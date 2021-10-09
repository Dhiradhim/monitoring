<?php
include "koneksi.php";
$id=$_POST['id'];
$tanggal_berat_timbangan=$_POST['tanggal_berat_timbangan'];
$jam_timbangan=$_POST['jam_timbangan'];
$berat=$_POST['berat'];


$query = "UPDATE berat_timbangan SET tanggal_berat_timbangan='$tanggal_berat_timbangan',jam_timbangan='$jam_timbangan',berat='$berat' WHERE id='$id'";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="berattimbangan.php?page=1&count=1"</script>';
?>
