<?php
include('koneksi.php');
$id = $_GET['id'];

$cek = mysqli_query($con, "SELECT id FROM login WHERE id='$id'") or die(mysql_error());
if(mysqli_num_rows($cek) == 0){
	echo '<script>window.history.back()</script>';
}else{
	$del = mysqli_query($con, "DELETE FROM login WHERE id='$id'");
if($del){
	echo ("<script language='JavaScript'> window.location.href='register.php?page=1&count=1'; </script>");
	}else{
		echo 'Gagal menghapus data! ';
		echo '<a href="login.php?page=1&count=1">Kembali</a>';
		
	}
		
}
	?>
