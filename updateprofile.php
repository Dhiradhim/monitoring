<?php
include('koneksi.php');
$check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
	$nama=$_SESSION['email'];
$query = "UPDATE users SET pic_user='$imgContent' WHERE nama='$nama'";
if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
//echo '<script>window.location.href="profile.php"</script>';
}?>
