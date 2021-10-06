<?php
include "koneksi.php";
$nama_produk= $_POST['nama_produk'];
$id_produk=$_POST['id_produk'];
$shift=$_POST['shift'];
$ukuran=$_POST['ukuran'];
$zona_1=$_POST['zona_1'];
$zona_2=$_POST['zona_2'];
$zona_3=$_POST['zona_3'];
$zona_4=$_POST['zona_4'];

$query = "INSERT into pengaturansuhu (id_produk,nama_produk,shift,ukuran,zona_1,zona_2,zona_3,zona_4) values ('$id_produk','$nama_produk','$shift','$ukuran','$zona_1','$zona_2','$zona_3','$zona_4')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="pengaturansuhu.php?page=1&count=1"</script>';
}?>
