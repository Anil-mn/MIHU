<?php
	include('conn.php');
	$resid = $_POST['user_id'];
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;
 
	mysqli_query($con,"INSERT INTO `user_img`( `uimg_loc`, `user_id`) VALUES('$location', $resid)");
	header('location:user.php');
?>

