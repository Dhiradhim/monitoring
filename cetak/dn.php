<?php
session_start();
require_once '../koneksi.php';
require_once 'bootstrap.php';

$id=$_GET['id_jaminan'];
$query = mysqli_query($con, "SELECT * FROM jaminan WHERE id_jaminan='$id'");
$run = mysqli_fetch_assoc($query);

$query2 = mysqli_query($con, "SELECT id_jaminan FROM jaminan WHERE status='yes'");
$run2 = mysqli_num_rows($query2);
$xcount = $run2+1;
$count = sprintf("%05d", $xcount);
$name = explode('.', $run['upload_dokumen']);


$tanggal_terbit = date("Y-m-d");
$no_polis='14S'.date("dmy").''.$count;
$upload_docx = $name[0].".docx";
$periode_awal = date("d F Y", strtotime($run['periode_awal']));
$tanggal_dokumen = date("d F Y", strtotime($run['tanggal_dokumen']));
$periode_akhir = date("d F Y", strtotime($run['periode_akhir']));
$xtanggal_terbit = date("d F Y", strtotime($tanggal_terbit));



$x = new \PhpOffice\PhpWord\TemplateProcessor('template_uangmuka.docx');
$x->setValue('no_polis', $no_polis);
$x->setValue('nilai_jaminan', $run['nilai_jaminan']);
$x->setValue('nama_perusahaan', $run['nama_perusahaan']);
$x->setValue('alamat_perusahaan', $run['alamat_perusahaan']);
$x->setValue('nama_obligee', $run['nama_obligee']);
$x->setValue('alamat_obligee', $run['alamat_obligee']);
$x->setValue('nilai_jaminan', $run['nilai_jaminan']);
$x->setValue('terbilang1', $run['terbilang1']);
$x->setValue('nama_dokumen', $run['nama_dokumen']);
$x->setValue('tanggal_dokumen', $tanggal_dokumen);
$x->setValue('nama_pekerjaan', $run['nama_pekerjaan']);
$x->setValue('nilai_proyek', $run['nilai_proyek']);
$x->setValue('terbilang2', $run['terbilang2']);
$x->setValue('nilai_jaminan', $run['nilai_jaminan']);
$x->setValue('terbilang1', $run['terbilang1']);
$x->setValue('jumlah_hari', $run['jumlah_hari']);
$x->setValue('periode_awal', $periode_awal);
$x->setValue('periode_akhir', $periode_akhir);
$x->setValue('tanggal_terbit', $xtanggal_terbit);
$x->setValue('nama_perusahaan', $run['nama_perusahaan']);
$x->saveAs("../file/$name[0].docx");
$query3 = mysqli_query($con, "UPDATE jaminan SET no_polis='$no_polis', tanggal_terbit='$tanggal_terbit', upload_docx='$upload_docx', status='yes' WHERE id_jaminan='$id'");
echo "<script type='text/javascript'>alert('Berhasil di Accept');</script>";
echo '<script>window.location.href="../admin/pengajuanjaminan.php"</script>';
?>