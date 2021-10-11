<?php
include "koneksi.php";
$id_produk=$_POST['id_produk'];
$query = mysqli_query($con, "SELECT tanggal_batch,shift FROM batch WHERE no_batch=$id_produk") or die(mysqli_connect_error());
$row = mysqli_fetch_assoc($query);
$shift=$row['shift'];
$tanggal_pengaturan_suhu=$row['tanggal_batch'];

$nama_produk= $_POST['nama_produk'];
$jam_pengaturan_suhu=$_POST['jam_pengaturan_suhu'];
$ukuran=$_POST['ukuran'];
$zona_1=$_POST['zona_1'];
$zona_2=$_POST['zona_2'];
$zona_3=$_POST['zona_3'];
$zona_4=$_POST['zona_4'];

$query = "INSERT into pengaturan_suhu (id_produk,tanggal_pengaturan_suhu,nama_produk,shift,ukuran,zona_1,zona_2,zona_3,zona_4,jam_pengaturan_suhu) values ('$id_produk','$tanggal_pengaturan_suhu','$nama_produk','$shift','$ukuran','$zona_1','$zona_2','$zona_3','$zona_4','$jam_pengaturan_suhu')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="pengaturansuhu.php?page=1&count=1"</script>';
?>
