<?php
include "koneksi.php";
$id_produk=$_POST['id_produk'];
$shift=$_POST['shift'];
$nama_produk= $_POST['nama_produk'];
$standar=$_POST['standar'];
$actual=$_POST['actual'];
$varian = $standar - $actual;
$persentase = $varian/$standar*100;
$start_downtime=$_POST['start_downtime'];
$stop_downtime=$_POST['stop_downtime'];
$deskripsi_downtime=$_POST['deskripsi_downtime'];
$tindakan_dilakukan=$_POST['tindakan_dilakukan'];
$tindakan_pencegahan=$_POST['tindakan_pencegahan'];
$nama_operator=$_POST['nama_operator'];
$nama_formen=$_POST['nama_formen'];
$nama_supervisor=$_POST['nama_supervisor'];

function selisih($start_downtime,$stop_downtime) 
{ 
list($h,$m) = explode(":" , $start_downtime);
$dtAwal = mktime($h,$m,"1","1"); 
list($h,$m) = explode(":",$stop_downtime); 
$dtAkhir = mktime($h,$m,"1","1"); 
$dtSelisih = $dtAkhir-$dtAwal; 
$totalmenit=$dtSelisih/60; 
$jam =explode(".",$totalmenit/60); 
$sisamenit=($totalmenit/60)-$jam[0]; 
$sisamenit2=$sisamenit*60; 
$jml_jam=$jam[0]; 
return $sisamenit2; 
} 

$total_downtime = selisih($start_downtime,$stop_downtime);

$query = "INSERT into hasil_cetak (id_produk,nama_produk,shift,standar,actual,varian,persentase,start_downtime,stop_downtime,total_downtime,deskripsi_downtime,tindakan_dilakukan,tindakan_pencegahan,nama_operator,nama_formen,nama_supervisor) values ('$id_produk','$nama_produk','$shift','$standar','$actual','$varian','$persentase','$start_downtime','$stop_downtime','$total_downtime','$deskripsi_downtime','$tindakan_dilakukan','$tindakan_pencegahan','$nama_operator','$nama_formen','$nama_supervisor')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="hasilcetak.php?page=1&count=1"</script>';
?>
