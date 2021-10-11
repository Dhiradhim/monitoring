<?php
session_start();  
include('koneksi.php');
$username=$_POST['username'];
$nik=$_POST['nik'];
$jabatan=$_POST['jabatan'];
$pass=md5($_POST['pass']);
$rep=md5($_POST['rep']);

if ($pass !== $rep)
{
	echo "<script type='text/javascript'>alert('Password Tidak Cocok');</script>";
	echo '<script>window.history.back()</script>';	
}else{
	$query = "INSERT into login (username,nik,jabatan,password) values ('$username','$nik','$jabatan','$pass')";
	$update = mysqli_query($con, $query);
	echo '<script>window.location.href="index.php"</script>';
}?>