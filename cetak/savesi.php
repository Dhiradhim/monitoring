<?php
include("../koneksi.php");
include("bootstrap.php");
$sascm=$_POST['sascm'];
if ($sascm == "SCM")
{
$namaper = "SC MEDIA";
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('temp_si.docx');
}
else
{
$namaper = "SELINDO ALPHA";
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('temp_sisa.docx');
}

$q_count = mysqli_query($con, "SELECT nosi FROM tb_si WHERE sascm='$sascm'");
$templateProcessorcount = mysqli_num_rows($q_count);
$count = $templateProcessorcount+1;

$nosi=$_POST['nosi'];
$nospk=$_POST['nospk'];
$tglspk=$_POST['tglspk'];
$tanggal=$_POST['tanggal'];
$nama=$_POST['nama'];
$xaction = implode(", ",$_POST['action']);
$action = explode(',', $xaction);
$action0 = "";
$action1 = "";
$action2 = "";
$action3 = "";
$action4 = "";
$action5 = "";
$i=0;
foreach($_POST['action'] as $action){
	${"action$i"} = $action;
	$i++;
}

$deliv=$_POST['deliv'];
$q_deliv=mysqli_query($con, "SELECT kantor, alamatkantor, kotakantor FROM tb_kantor WHERE id_kantor='$deliv'");
$row_deliv=mysqli_fetch_assoc($q_deliv);
$kantordeliv=$row_deliv['kantor'];
$alamatdeliv=$row_deliv['alamatkantor'];
$kotadeliv=$row_deliv['kotakantor'];

$install=$_POST['install'];
$q_install=mysqli_query($con, "SELECT kantor, alamatkantor, kotakantor FROM tb_kantor WHERE id_kantor='$install'");
$row_install=mysqli_fetch_assoc($q_install);
$kantorinstall=$row_install['kantor'];
$alamatinstall=$row_install['alamatkantor'];
$kotainstall=$row_install['kotakantor'];

$namabarang1=$_POST['namabarang1'];
$qt1=$_POST['qt1'];
$unit1=$_POST['unit1'];
$sn1=$_POST['sn1'];
$pn1=$_POST['pn1'];
$remark1=$_POST['remark1'];

$namabarang2=$_POST['namabarang2'];
$qt2=$_POST['qt2'];
$unit2=$_POST['unit2'];
$sn2=$_POST['sn2'];
$pn2=$_POST['pn2'];
$remark2=$_POST['remark2'];

$namabarang3=$_POST['namabarang3'];
$qt3=$_POST['qt3'];
$unit3=$_POST['unit3'];
$sn3=$_POST['sn3'];
$pn3=$_POST['pn3'];
$remark3=$_POST['remark3'];

$namabarang4=$_POST['namabarang4'];
$qt4=$_POST['qt4'];
$unit4=$_POST['unit4'];
$sn4=$_POST['sn4'];
$pn4=$_POST['pn4'];
$remark4=$_POST['remark4'];

$namabarang5=$_POST['namabarang5'];
$qt5=$_POST['qt5'];
$unit5=$_POST['unit5'];
$sn5=$_POST['sn5'];
$pn5=$_POST['pn5'];
$remark5=$_POST['remark5'];

$namabarang6=$_POST['namabarang6'];
$qt6=$_POST['qt6'];
$unit6=$_POST['unit6'];
$sn6=$_POST['sn6'];
$pn6=$_POST['pn6'];
$remark6=$_POST['remark6'];

$approvedby=$_POST['approvedby'];
$pickupby=$_POST['pickupby'];

$templateProcessor->setValue('namaper', $namaper);
$templateProcessor->setValue('nosi', $nosi);
$templateProcessor->setValue('nospk', $nospk);
$templateProcessor->setValue('tglspk', $tglspk);
$templateProcessor->setValue('tanggal', $tanggal);
$templateProcessor->setValue('customer', $nama);
$templateProcessor->setValue('action1', $action0);
$templateProcessor->setValue('action2', $action1);
$templateProcessor->setValue('action3', $action2);
$templateProcessor->setValue('action4', $action3);
$templateProcessor->setValue('action5', $action4);
$templateProcessor->setValue('action6', $action5);
$templateProcessor->setValue('deliv', $kantordeliv);
$templateProcessor->setValue('alamatdeliv', $alamatdeliv);
$templateProcessor->setValue('kotadeliv', $kotadeliv);
$templateProcessor->setValue('install', $kantorinstall);
$templateProcessor->setValue('alamatinstall', $alamatinstall);
$templateProcessor->setValue('kotainstall', $kotainstall);
$templateProcessor->setValue('namabarang1', $namabarang1);
$templateProcessor->setValue('unit1', $unit1);
$templateProcessor->setValue('qt1', $qt1);
$templateProcessor->setValue('sn1', $sn1);
$templateProcessor->setValue('pn1', $pn1);
$templateProcessor->setValue('remark1', $remark1);
$templateProcessor->setValue('namabarang2', $namabarang2);
$templateProcessor->setValue('unit2', $unit2);
$templateProcessor->setValue('qt2', $qt2);
$templateProcessor->setValue('sn2', $sn2);
$templateProcessor->setValue('pn2', $pn2);
$templateProcessor->setValue('remark2', $remark2);
$templateProcessor->setValue('namabarang3', $namabarang3);
$templateProcessor->setValue('unit3', $unit3);
$templateProcessor->setValue('qt3', $qt3);
$templateProcessor->setValue('sn3', $sn3);
$templateProcessor->setValue('pn3', $pn3);
$templateProcessor->setValue('remark3', $remark3);
$templateProcessor->setValue('namabarang4', $namabarang4);
$templateProcessor->setValue('unit4', $unit4);
$templateProcessor->setValue('qt4', $qt4);
$templateProcessor->setValue('sn4', $sn4);
$templateProcessor->setValue('pn4', $pn4);
$templateProcessor->setValue('remark4', $remark4);
$templateProcessor->setValue('namabarang5', $namabarang5);
$templateProcessor->setValue('unit5', $unit5);
$templateProcessor->setValue('qt5', $qt5);
$templateProcessor->setValue('sn5', $sn5);
$templateProcessor->setValue('pn5', $pn5);
$templateProcessor->setValue('remark5', $remark5);
$templateProcessor->setValue('namabarang6', $namabarang6);
$templateProcessor->setValue('unit6', $unit6);
$templateProcessor->setValue('qt6', $qt6);
$templateProcessor->setValue('sn6', $sn6);
$templateProcessor->setValue('pn6', $pn6);
$templateProcessor->setValue('remark6', $remark6);
$templateProcessor->setValue('approvedby', $approvedby);
$templateProcessor->setValue('pickupby', $pickupby);
$templateProcessor->saveAs("file/SI-$sascm-$count.docx");

if ($namabarang6 !="")
{
$query6 = "INSERT into tb_si (sascm, nosi, nospk, tglspk, tanggal, customer, action, deliv, alamatdeliv, kotadeliv, install, alamatinstall, kotainstall, namabarang1, unit1, qt1, sn1, pn1, remark1, namabarang2, qt2, unit2, sn2, pn2, remark2, namabarang3, qt3, unit3, sn3, pn3, remark3, namabarang4, qt4, unit4, sn4, pn4, remark4, namabarang5, qt5, unit5, sn5, pn5, remark5, namabarang6, qt6, unit6, sn6, pn6, remark6, approvedby, pickupby, nama_file) VALUES ('$sascm','$nosi','$nospk','$tglspk','$tanggal','$nama','$xaction','$kantordeliv','$alamatdeliv','$kotadeliv','$kantorinstall','$alamatinstall','$kotainstall','$namabarang1','$unit1','$qt1','$sn1','$pn1','$remark1','$namabarang2','$qt2','$unit2','$sn2','$pn2','$remark2','$namabarang3','$qt3','$unit3','$sn3','$pn3','$remark3','$namabarang4','$qt4','$unit4','$sn4','$pn4','$remark4','$namabarang5','$qt5','$unit5','$sn5','$pn5','$remark5','$namabarang6','$qt6','$unit6','$sn6','$pn6','$remark6','$approvedby','$pickupby','SI-$sascm-$count.docx')";
$sql6=mysqli_query($con, $query6);
echo '<script>window.location.href="datasi.php"</script>';
}
else
if ($namabarang5 !="")
{
$query5 = "INSERT into tb_si (sascm, nosi, nospk, tglspk, tanggal, customer, action, deliv, alamatdeliv, kotadeliv, install, alamatinstall, kotainstall, namabarang1, unit1, qt1, sn1, pn1, remark1, namabarang2, qt2, unit2, sn2, pn2, remark2, namabarang3, qt3, unit3, sn3, pn3, remark3, namabarang4, qt4, unit4, sn4, pn4, remark4, namabarang5, qt5, unit5, sn5, pn5, remark5, approvedby, pickupby, nama_file) VALUES ('$sascm','$nosi','$nospk','$tglspk','$tanggal','$nama','$xaction','$kantordeliv','$alamatdeliv','$kotadeliv','$kantorinstall','$alamatinstall','$kotainstall','$namabarang1','$unit1','$qt1','$sn1','$pn1','$remark1','$namabarang2','$qt2','$unit2','$sn2','$pn2','$remark2','$namabarang3','$qt3','$unit3','$sn3','$pn3','$remark3','$namabarang4','$qt4','$unit4','$sn4','$pn4','$remark4','$namabarang5','$qt5','$unit5','$sn5','$pn5','$remark5','$approvedby','$pickupby','SI-$sascm-$count.docx')";
$sql5=mysqli_query($con, $query5);
echo '<script>window.location.href="datasi.php"</script>';
}
else
if ($namabarang4 !="")
{
$query4 = "INSERT into tb_si (sascm, nosi, nospk, tglspk, tanggal, customer, action, deliv, alamatdeliv, kotadeliv, install, alamatinstall, kotainstall, namabarang1, unit1, qt1, sn1, pn1, remark1, namabarang2, qt2, unit2, sn2, pn2, remark2, namabarang3, qt3, unit3, sn3, pn3, remark3, namabarang4, qt4, unit4, sn4, pn4, remark4, approvedby, pickupby, nama_file) VALUES ('$sascm','$nosi','$nospk','$tglspk','$tanggal','$nama','$xaction','$kantordeliv','$alamatdeliv','$kotadeliv','$kantorinstall','$alamatinstall','$kotainstall','$namabarang1','$unit1','$qt1','$sn1','$pn1','$remark1','$namabarang2','$qt2','$unit2','$sn2','$pn2','$remark2','$namabarang3','$qt3','$unit3','$sn3','$pn3','$remark3','$namabarang4','$qt4','$unit4','$sn4','$pn4','$remark4','$approvedby','$pickupby','SI-$sascm-$count.docx')";
$sql4=mysqli_query($con, $query4);
echo '<script>window.location.href="datasi.php"</script>';
}
else
if ($namabarang3 !="")
{
$query3 = "INSERT into tb_si (sascm, nosi, nospk, tglspk, tanggal, customer, action, deliv, alamatdeliv, kotadeliv, install, alamatinstall, kotainstall, namabarang1, unit1, qt1, sn1, pn1, remark1, namabarang2, qt2, unit2, sn2, pn2, remark2, namabarang3, qt3, unit3, sn3, pn3, remark3, approvedby, pickupby, nama_file) VALUES ('$sascm','$nosi','$nospk','$tglspk','$tanggal','$nama','$xaction','$kantordeliv','$alamatdeliv','$kotadeliv','$kantorinstall','$alamatinstall','$kotainstall','$namabarang1','$unit1','$qt1','$sn1','$pn1','$remark1','$namabarang2','$qt2','$unit2','$sn2','$pn2','$remark2','$namabarang3','$qt3','$unit3','$sn3','$pn3','$remark3','$approvedby','$pickupby','SI-$sascm-$count.docx')";
$sql3=mysqli_query($con, $query3);
echo '<script>window.location.href="datasi.php"</script>';
}
else
if ($namabarang2 !="")
{
$query2 = "INSERT into tb_si (sascm, nosi, nospk, tglspk, tanggal, customer, action, deliv, alamatdeliv, kotadeliv, install, alamatinstall, kotainstall, namabarang1, unit1, qt1, sn1, pn1, remark1, namabarang2, qt2, unit2, sn2, pn2, remark2, approvedby, pickupby, nama_file) VALUES ('$sascm','$nosi','$nospk','$tglspk','$tanggal','$nama','$xaction','$kantordeliv','$alamatdeliv','$kotadeliv','$kantorinstall','$alamatinstall','$kotainstall','$namabarang1','$unit1','$qt1','$sn1','$pn1','$remark1','$namabarang2','$qt2','$unit2','$sn2','$pn2','$remark2','$approvedby','$pickupby','SI-$sascm-$count.docx')";
$sql2=mysqli_query($con, $query2);
echo '<script>window.location.href="datasi.php"</script>';
}
else
$query = "INSERT into tb_si (sascm, nosi, nospk, tglspk, tanggal, customer, action, deliv, alamatdeliv, kotadeliv, install, alamatinstall, kotainstall, namabarang1, unit1, qt1, sn1, pn1, remark1, approvedby, pickupby, nama_file) VALUES ('$sascm','$nosi','$nospk','$tglspk','$tanggal','$nama','$xaction','$kantordeliv','$alamatdeliv','$kotadeliv','$kantorinstall','$alamatinstall','$kotainstall','$namabarang1','$unit1','$qt1','$sn1','$pn1','$remark1', '$approvedby','$pickupby','SI-$sascm-$count.docx')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="datasi.php"</script>';
// echo $query;
?>

