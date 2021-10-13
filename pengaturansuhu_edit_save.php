<?php
include "koneksi.php";
$id= $_POST['id'];
$shift=$_POST['shift'];
$ukuran=$_POST['ukuran'];
$zona_1=$_POST['zona_1'];
$zona_2=$_POST['zona_2'];
$zona_3=$_POST['zona_3'];
$zona_4=$_POST['zona_4'];

$query = "UPDATE pengaturan_suhu SET shift='$shift',ukuran='$ukuran',zona_1='$zona_1',zona_2='$zona_2',zona_3='$zona_3',zona_4='$zona_4' WHERE id='$id'";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="pengaturansuhu.php?page=1&count=1"</script>';
?>
