<?php
include("../koneksi.php");
include("bootstrap.php");

$id_tt = $_POST['id'];
$q = mysqli_query($con, "SELECT nama_file FROM tb_tt WHERE id_tt='$id_tt'");
$row = mysqli_fetch_assoc($q);
$nama_file = explode('.', $row['nama_file']);

$allowed= 'pdf';
$files = $_FILES['upload']['name'];
$eks = explode('.', $files);
$ekstensi = strtolower(end($eks));
$size = $_FILES['upload']['size'];
$temp_name = $_FILES['upload']['tmp_name'];
$upload_file = $nama_file[0].".".$nama_file[1].".".$nama_file[2].".".$ekstensi;

if ($ekstensi==$allowed)
{
	if ($size < 2097152)
	{		
		move_uploaded_file($temp_name, 'file/'.$upload_file);
		$query = mysqli_query($con, "UPDATE tb_tt SET status='yes', upload_file='$upload_file'");
		$sql=mysqli_query($con, $query);
		echo '<script>window.location.href="datatt.php"</script>';
	}else{echo "<script type='text/javascript'>alert('Size Dokumen tidak boleh lebih dari 2MB!!');</script>"; //echo '<script>window.history.back()</script>';
	}
}else
{
	echo "<script type='text/javascript'>alert('File harus berjenis PDF!!');</script>"; //echo '<script>window.history.back()</script>';
}
