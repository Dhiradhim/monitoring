<?php
include("../koneksi.php");
include("bootstrap.php");
$sascm=$_POST['sascm'];

if ($sascm == "SCM")
{
$namaper = "PT. Semesta Citra Media";
}
else
{
$namaper = "PT. Selindo Alpha";
}

$q_count = mysqli_query($con, "SELECT nott FROM tb_tt WHERE sascm='$sascm'");
$templateProcessorcount = mysqli_num_rows($q_count);
$count = $templateProcessorcount+1;

$nott=$_POST['nott'];
$tanggal=$_POST['tanggal'];
$dari=$_POST['dari'];
$kepada=$_POST['kepada'];
$summary=$_POST['summary'];
$keterangan=$_POST['keterangan'];
$nama_file = "TT.".date('y').".".date('m')."-".$sascm."-".$count.".docx";

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('temp_tt.docx');
$templateProcessor->setValue('namaper', $namaper);
$templateProcessor->setValue('nott', $nott);
$templateProcessor->setValue('kepada', $kepada);
$templateProcessor->setValue('dari', $dari);
$templateProcessor->setValue('kepada', $kepada);
$templateProcessor->setValue('dari', $dari);
$templateProcessor->setValue('keterangan', $keterangan);
$templateProcessor->setValue('tanggal', $tanggal);
$templateProcessor->saveAs("file/$nama_file");

$query = "INSERT into tb_tt (sascm, nott, tanggal, dari, kepada, summary, keterangan, nama_file) VALUES ('$sascm','$nott','$tanggal','$dari','$kepada','$summary','$keterangan','$nama_file')";
$sql=mysqli_query($con, $query);
echo '<script>window.location.href="datatt.php"</script>';
