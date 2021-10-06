<?php
session_start();  
include('koneksi.php');
$kd=$_SESSION['kd'];


if(isset($_POST['simpan'])){
$username= $_POST['username'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$nohp=$_POST['nohp'];

$query = "UPDATE users SET username='$username', nama='$nama', email='$email', nohp='$nohp' WHERE kd_user='$kd'";
$update = mysqli_query($con, $query);
echo '<script>window.location.href="profile.php"</script>';
}?>