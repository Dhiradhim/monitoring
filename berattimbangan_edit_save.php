<?php
include "koneksi.php";
$id=$_POST['id'];
$jam_timbangan=$_POST['jam_timbangan'];
$berat=$_POST['berat'];


$query = "UPDATE berat_timbangan SET jam_timbangan='$jam_timbangan',berat='$berat' WHERE id='$id'";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="berattimbangan.php?page=1&count=1"</script>';
?>
