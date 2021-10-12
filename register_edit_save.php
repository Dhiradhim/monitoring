<?php
session_start();  
include('koneksi.php');
$id=$_POST['id'];
$username=$_POST['username'];
$nik=$_POST['nik'];
$jabatan=$_POST['jabatan'];
$pass=md5($_POST['pass']);
$rep=md5($_POST['rep']);

if ($pass == ""){
	$query = "UPDATE login SET username='$username',nik='$nik',jabatan='$jabatan' WHERE id='$id'";
	$update = mysqli_query($con, $query);
	echo '<script>window.location.href="register.php"</script>';
}
if ($pass !== $rep)
{
	echo "<script type='text/javascript'>alert('Password Tidak Cocok');</script>";
	echo '<script>window.history.back()</script>';	
}else{
	$query = "UPDATE login SET username='$username',nik='$nik',jabatan='$jabatan',password='$pass' WHERE id='$id'";
	$update = mysqli_query($con, $query);
	echo '<script>window.location.href="register.php"</script>';
}?>