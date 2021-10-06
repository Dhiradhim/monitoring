<?php
include '../koneksi.php';
$nama = $_GET['id_cust'];
$kantor = $_GET['kantor'];
$query = mysqli_query($con, "select * from tb_kantor where id_cust='$nama' AND kantor='$kantor'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'alamatkantor'   =>  $mahasiswa['alamatkantor'],
            'kotakantor'    =>  $mahasiswa['kotakantor'],);
 echo json_encode($data);
?>
