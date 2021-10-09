<?php
include "koneksi.php";
$id=$_POST['id'];
$tanggal_hasil_cetak=$_POST['tanggal_hasil_cetak'];
$jam_hasil_cetak=$_POST['jam_hasil_cetak'];
$standar=$_POST['standar'];
$actual=$_POST['actual'];
$varian = $standar - $actual;
$persentase = $varian/$standar*100;
$start_downtime=$_POST['start_downtime'];
$stop_downtime=$_POST['stop_downtime'];
$deskripsi_downtime=$_POST['deskripsi_downtime'];
$tindakan_dilakukan=$_POST['tindakan_dilakukan'];
$tindakan_pencegahan=$_POST['tindakan_pencegahan'];

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

$query = "UPDATE hasil_cetak SET tanggal_hasil_cetak='$tanggal_hasil_cetak',jam_hasil_cetak='$jam_hasil_cetak',standar='$standar',actual='$actual',varian='$varian',persentase='$persentase',start_downtime='$start_downtime',stop_downtime='$stop_downtime',total_downtime='$total_downtime',deskripsi_downtime='$deskripsi_downtime',tindakan_dilakukan='$tindakan_dilakukan',tindakan_pencegahan='$tindakan_pencegahan' WHERE id='$id'";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="hasilcetak.php?page=1&count=1"</script>';
?>
