<?php
include "koneksi.php";
$id=$_POST['id'];
$shift=$_POST['shift'];
$berat=$_POST['berat'];


$query = "UPDATE berat_timbangan SET shift='$shift',berat='$berat' WHERE id='$id'";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="berattimbangan.php?page=1&count=1"</script>';
?>
