<?php
	include('conn.php');
	$resid = $_POST['service_id'];
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	$location="uploadone/" . $newFilename;
 
	mysqli_query($con,"INSERT INTO `serv_img`( `simg_loc`, `service_id`) VALUES ('$location', $resid)");
	header('location:service.php');
?>

