<?php
include("../koneksi.php");
include("bootstrap.php");
$sascm=$_POST['sascm'];
if ($sascm == "SCM")
{
$namaper = "SEMESTA CITRA MEDIA";
$alamat = "JL. MELAWAI XI NO. 61 JAKARTA 12160";
$telp = "7220222";
$fax = "7209222";
}
else
{
$namaper = "SELINDO ALPHA";
$alamat = "JL. MELAWAI XI NO. 62 JAKARTA 12160";
$telp = "72790001";
$fax = "72790002";
}

$q_count = mysqli_query($con, "SELECT nodn FROM tb_dn WHERE sascm='$sascm'");
$templateProcessorcount = mysqli_num_rows($q_count);
$count = $templateProcessorcount+1;

$nodn=$_POST['nodn'];
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$kantor=$_POST['kantor'];
$q_kantor=mysqli_query($con, "SELECT alamatkantor, kotakantor FROM tb_kantor WHERE id_cust='$nama' AND kantor='$kantor'");
$row_kantor=mysqli_fetch_assoc($q_kantor);

$alamatkantor=$row_kantor['alamatkantor'];
$kotakantor=$row_kantor['kotakantor'];

$tipebarang1=$_POST['tipebarang1'];
$namabarang1=$_POST['namabarang1'];
$q = "SELECT merk_$tipebarang1, type_$tipebarang1,sn_$tipebarang1, pn_$tipebarang1 FROM tb_$tipebarang1 WHERE kd_$tipebarang1='$namabarang1'";
$q_1=mysqli_query($con, $q);
$row_barang1=mysqli_fetch_assoc($q_1);
$sn1=$row_barang1["sn_$tipebarang1"];
$pn1=$row_barang1["pn_$tipebarang1"];
$merk1=$row_barang1["merk_$tipebarang1"];
$type1=$row_barang1["type_$tipebarang1"];
$nm1 = $merk1." ".$type1;
$qt1=$_POST['qt1'];
$unit1=$_POST['unit1'];
$remark1=$_POST['remark1'];


$tipebarang2=$_POST['tipebarang2'];
$namabarang2=$_POST['namabarang2'];
$q_2=mysqli_query($con, "SELECT merk_$tipebarang2, type_$tipebarang2, sn_$tipebarang2, pn_$tipebarang2 FROM tb_$tipebarang2 WHERE kd_$tipebarang2='$namabarang2'");
$row_barang2=mysqli_fetch_assoc($q_2);
$sn2=$row_barang2["sn_$tipebarang2"];
$pn2=$row_barang2["pn_$tipebarang2"];
$merk2=$row_barang2["merk_$tipebarang2"];
$type2=$row_barang2["type_$tipebarang2"];
$nm2 = $merk2." ".$type2;
$qt2=$_POST['qt2'];
$unit2=$_POST['unit2'];
$remark2=$_POST['remark2'];

$tipebarang3=$_POST['tipebarang3'];
$namabarang3=$_POST['namabarang3'];
$q_3=mysqli_query($con, "SELECT merk_$tipebarang3,type_$tipebarang3,sn_$tipebarang3, pn_$tipebarang3 FROM tb_$tipebarang3 WHERE kd_$tipebarang3='$namabarang3'");
$row_barang3=mysqli_fetch_assoc($q_3);
$sn3=$row_barang3["sn_$tipebarang3"];
$pn3=$row_barang3["pn_$tipebarang3"];
$type3=$row_barang3["type_$tipebarang3"];
$merk3=$row_barang3["merk_$tipebarang3"];
$nm3 = $merk3." ".$type3;
$qt3=$_POST['qt3'];
$unit3=$_POST['unit3'];
$remark3=$_POST['remark3'];

$tipebarang4=$_POST['tipebarang4'];
$namabarang4=$_POST['namabarang4'];
$q_4=mysqli_query($con, "SELECT merk_$tipebarang4,type_$tipebarang4, sn_$tipebarang4, pn_$tipebarang4 FROM tb_$tipebarang4 WHERE kd_$tipebarang4='$namabarang4'");
$row_barang4=mysqli_fetch_assoc($q_4);
$sn4=$row_barang4["sn_$tipebarang4"];
$pn4=$row_barang4["pn_$tipebarang4"];
$merk4=$row_barang4["merk_$tipebarang4"];
$type4=$row_barang4["type_$tipebarang4"];
$nm4 = $merk4." ".$type4;
$qt4=$_POST['qt4'];
$unit4=$_POST['unit4'];
$remark4=$_POST['remark4'];

$tipebarang5=$_POST['tipebarang5'];
$namabarang5=$_POST['namabarang5'];
$q_5=mysqli_query($con, "SELECT sn_$tipebarang5, pn_$tipebarang5 FROM tb_$tipebarang5 WHERE kd_$tipebarang5='$namabarang5'");
$row_barang5=mysqli_fetch_assoc($q_5);
$sn5=$row_barang5["sn_$tipebarang5"];
$pn5=$row_barang5["pn_$tipebarang5"];
$nm5 = $merk5." ".$type5;
$qt5=$_POST['qt5'];
$unit5=$_POST['unit5'];
$remark5=$_POST['remark5'];

$tipebarang6=$_POST['tipebarang6'];
$namabarang6=$_POST['namabarang6'];
$q_6=mysqli_query($con, "SELECT merk_$tipebarang6, type_$tipebarang6, sn_$tipebarang6, pn_$tipebarang6 FROM tb_$tipebarang6 WHERE kd_$tipebarang6='$namabarang6'");
$row_barang6=mysqli_fetch_assoc($q_6);
$sn6=$row_barang6["sn_$tipebarang6"];
$pn6=$row_barang6["pn_$tipebarang6"];
$merk6=$row_barang6["merk_$tipebarang6"];
$type6=$row_barang6["type_$tipebarang6"];
$nm6 = $merk6." ".$type6;
$qt6=$_POST['qt6'];
$unit6=$_POST['unit6'];
$remark6=$_POST['remark6'];

$tipebarang7=$_POST['tipebarang7'];
$namabarang7=$_POST['namabarang7'];
$q_7=mysqli_query($con, "SELECT merk_$tipebarang7, type_$tipebarang7, sn_$tipebarang7, pn_$tipebarang7 FROM tb_$tipebarang7 WHERE kd_$tipebarang7='$namabarang7'");
$row_barang7=mysqli_fetch_assoc($q_7);
$sn7=$row_barang7["sn_$tipebarang7"];
$pn7=$row_barang7["pn_$tipebarang7"];
$merk7=$row_barang7["merk_$tipebarang7"];
$type7=$row_barang7["type_$tipebarang7"];
$nm7 = $merk7." ".$type7;
$qt7=$_POST['qt7'];
$unit7=$_POST['unit7'];
$remark7=$_POST['remark7'];

$sender=$_POST['sender'];
$warehouse=$_POST['warehouse'];

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('temp_dn.docx');
$templateProcessor->setValue('namaper', $namaper);
$templateProcessor->setValue('alamat', $alamat);
$templateProcessor->setValue('telp', $telp);
$templateProcessor->setValue('fax', $fax);
$templateProcessor->setValue('nodn', $nodn);
$templateProcessor->setValue('tanggal', $tanggal);
$templateProcessor->setValue('nama', $nama);
$templateProcessor->setValue('kantor', $kantor);
$templateProcessor->setValue('alamatkantor', $alamatkantor);
$templateProcessor->setValue('kotakantor', $kotakantor);
$templateProcessor->setValue('namabarang1', $nm1);
$templateProcessor->setValue('sn1', $sn1);
$templateProcessor->setValue('pn1', $pn1);
$templateProcessor->setValue('unit1', $unit1);
$templateProcessor->setValue('qt1', $qt1);
$templateProcessor->setValue('remark1', $remark1);
$templateProcessor->setValue('namabarang2', $nm2);
$templateProcessor->setValue('sn2', $sn2);
$templateProcessor->setValue('pn2', $pn2);
$templateProcessor->setValue('unit2', $unit2);
$templateProcessor->setValue('qt2', $qt2);
$templateProcessor->setValue('remark2', $remark2);
$templateProcessor->setValue('namabarang3', $nm3);
$templateProcessor->setValue('sn3', $sn3);
$templateProcessor->setValue('pn3', $pn3);
$templateProcessor->setValue('unit3', $unit3);
$templateProcessor->setValue('qt3', $qt3);
$templateProcessor->setValue('remark3', $remark3);
$templateProcessor->setValue('namabarang4', $nm4);
$templateProcessor->setValue('sn4', $sn4);
$templateProcessor->setValue('pn4', $pn4);
$templateProcessor->setValue('unit4', $unit4);
$templateProcessor->setValue('qt4', $qt4);
$templateProcessor->setValue('remark4', $remark4);
$templateProcessor->setValue('namabarang5', $nm5);
$templateProcessor->setValue('sn5', $sn5);
$templateProcessor->setValue('pn5', $pn5);
$templateProcessor->setValue('unit5', $unit5);
$templateProcessor->setValue('qt5', $qt5);
$templateProcessor->setValue('remark5', $remark5);
$templateProcessor->setValue('namabarang6', $nm6);
$templateProcessor->setValue('sn6', $sn6);
$templateProcessor->setValue('pn6', $pn6);
$templateProcessor->setValue('unit6', $unit6);
$templateProcessor->setValue('qt6', $qt6);
$templateProcessor->setValue('remark6', $remark6);
$templateProcessor->setValue('namabarang7', $nm7);
$templateProcessor->setValue('sn7', $sn7);
$templateProcessor->setValue('pn7', $pn7);
$templateProcessor->setValue('unit7', $unit7);
$templateProcessor->setValue('qt7', $qt7);
$templateProcessor->setValue('remark7', $remark7);
$templateProcessor->setValue('sender', $sender);
$templateProcessor->setValue('warehouse', $warehouse);
$templateProcessor->saveAs("file/DN-$sascm-$count.docx");


if ($tipebarang7 !="-")
{
$query7 = "INSERT into tb_dn (sascm, nodn, tanggal, cust, kantor, alamatkantor, kotakantor, namabarang1, sn1, pn1, unit1, qt1, remark1, namabarang2, sn2, pn2,qt2,unit2, remark2, namabarang3, sn3, pn3, qt3, unit3, remark3, namabarang4, sn4, pn4, qt4, unit4, remark4, namabarang5, sn5, pn5, qt5, unit5, remark5, namabarang6, sn6, pn6, qt6, unit6, remark6, namabarang7, sn7, pn7, qt7, unit7, remark7, sender, warehouse, nama_file) VALUES ('$sascm','$nodn','$tanggal','$nama','$kantor','$alamatkantor','$kotakantor','$nm1','$sn1','$pn1','$unit1','$qt1','$remark1','$nm2','$sn2','$pn2','$qt2','$unit2','$remark2','$nm3','$sn3','$pn3','$qt3','$unit3','$remark3','$nm4','$sn4','$pn4','$qt4','$unit4','$remark4','$nm5','$sn5','$pn5','$qt5','$unit5','$remark5','$nm6','$sn6','$pn6','$qt6','$unit6','$remark6','$nm7','$sn7','$pn7','$qt7','$unit7','$remark7','$sender','$warehouse','DN-$sascm-$count.docx')";
$sql7=mysqli_query($con, $query7);
echo '<script>window.location.href="data.php"</script>';
}
else
if ($tipebarang6 !="-")
{
$query6 = "INSERT into tb_dn (sascm, nodn, tanggal, cust, kantor, alamatkantor, kotakantor, namabarang1, sn1, pn1, unit1, qt1, remark1, namabarang2, sn2, pn2,qt2,unit2, remark2, namabarang3, sn3, pn3, qt3, unit3, remark3, namabarang4, sn4, pn4, qt4, unit4, remark4, namabarang5, sn5, pn5, qt5, unit5, remark5, namabarang6, sn6, pn6, qt6, unit6, remark6, sender, warehouse, nama_file) VALUES ('$sascm','$nodn','$tanggal','$nama','$kantor','$alamatkantor','$kotakantor','$nm1','$sn1','$pn1','$unit1','$qt1','$remark1','$nm2','$sn2','$pn2','$qt2','$unit2','$remark2','$nm3','$sn3','$pn3','$qt3','$unit3','$remark3','$nm4','$sn4','$pn4','$qt4','$unit4','$remark4','$nm5','$sn5','$pn5','$qt5','$unit5','$remark5','$nm6','$sn6','$pn6','$qt6','$unit6','$remark6','$sender','$warehouse','DN-$sascm-$count.docx')";
$sql6=mysqli_query($con, $query6);
echo '<script>window.location.href="data.php"</script>';
}
else
if ($tipebarang5 !="-")
{
$query5 = "INSERT into tb_dn (sascm, nodn, tanggal, cust, kantor, alamatkantor, kotakantor, namabarang1, sn1, pn1, unit1, qt1, remark1, namabarang2, sn2, pn2,qt2,unit2, remark2, namabarang3, sn3, pn3, qt3, unit3, remark3, namabarang4, sn4, pn4, qt4, unit4, remark4, namabarang5, sn5, pn5, qt5, unit5, remark5, sender, warehouse, nama_file) VALUES ('$sascm','$nodn','$tanggal','$nama','$kantor','$alamatkantor','$kotakantor','$nm1','$sn1','$pn1','$unit1','$qt1','$remark1','$nm2','$sn2','$pn2','$qt2','$unit2','$remark2','$nm3','$sn3','$pn3','$qt3','$unit3','$remark3','$nm4','$sn4','$pn4','$qt4','$unit4','$remark4','$nm5','$sn5','$pn5','$qt5','$unit5','$remark5','$sender','$warehouse','DN-$sascm-$count.docx')";
$sql5=mysqli_query($con, $query5);
echo '<script>window.location.href="data.php"</script>';
}
else
if ($tipebarang4 !="-")
{
$query4 = "INSERT into tb_dn (sascm, nodn, tanggal, cust, kantor, alamatkantor, kotakantor, namabarang1, sn1, pn1, unit1, qt1, remark1, namabarang2, sn2, pn2,qt2,unit2, remark2, namabarang3, sn3, pn3, qt3, unit3, remark3, namabarang4, sn4, pn4, qt4, unit4, remark4, sender, warehouse, nama_file) VALUES ('$sascm','$nodn','$tanggal','$nama','$kantor','$alamatkantor','$kotakantor','$nm1','$sn1','$pn1','$unit1','$qt1','$remark1','$nm2','$sn2','$pn2','$qt2','$unit2','$remark2','$nm3','$sn3','$pn3','$qt3','$unit3','$remark3','$nm4','$sn4','$pn4','$qt4','$unit4','$remark4','$sender','$warehouse','DN-$sascm-$count.docx')";
$sql4=mysqli_query($con, $query4);
echo '<script>window.location.href="data.php"</script>';
}
else
if ($tipebarang3 !="-")
{
$query3 = "INSERT into tb_dn (sascm, nodn, tanggal, cust, kantor, alamatkantor, kotakantor, namabarang1, sn1, pn1, unit1, qt1, remark1, namabarang2, sn2, pn2,qt2,unit2, remark2, namabarang3, sn3, pn3, qt3, unit3, remark3, sender, warehouse, nama_file) VALUES ('$sascm','$nodn','$tanggal','$nama','$kantor','$alamatkantor','$kotakantor','$nm1','$sn1','$pn1','$unit1','$qt1','$remark1','$nm2','$sn2','$pn2','$qt2','$unit2','$remark2','$nm3','$sn3','$pn3','$qt3','$unit3','$remark3','$sender','$warehouse','DN-$sascm-$count.docx')";
$sql3=mysqli_query($con, $query3);
echo '<script>window.location.href="data.php"</script>';
}
else
if ($tipebarang2 !="-")
{
$query2 = "INSERT into tb_dn (sascm, nodn, tanggal, cust, kantor, alamatkantor, kotakantor, namabarang1, sn1, pn1, unit1, qt1, remark1, namabarang2, sn2, pn2, qt2,unit2, remark2, sender, warehouse, nama_file) VALUES ('$sascm','$nodn','$tanggal','$nama','$kantor','$alamatkantor','$kotakantor','$nm1','$sn1','$pn1','$unit1','$qt1','$remark1','$nm2','$sn2','$pn2','$qt2','$unit2','$remark2','$sender','$warehouse','DN-$sascm-$count.docx')";
$sql2=mysqli_query($con, $query2);
echo '<script>window.location.href="data.php"</script>';
}
else
$query = "INSERT into tb_dn (sascm, nodn, tanggal, cust, kantor, alamatkantor, kotakantor, namabarang1, sn1, pn1, unit1, qt1, remark1, sender, warehouse, nama_file) VALUES ('$sascm','$nodn','$tanggal','$nama','$kantor','$alamatkantor','$kotakantor','$nm1','$sn1','$pn1','$unit1','$qt1','$remark1', '$sender','$warehouse','DN-$sascm-$count.docx')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="data.php"</script>';
?>
