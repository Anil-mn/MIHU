<?php
	include('conn.php');
	$resid = $_POST['id'];
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	$location="uploadtwo/" . $newFilename;
 
	mysqli_query($con,"INSERT INTO `spot_img`( `img_loc`,  `id`) VALUES ('$location', $resid)");
	header('location:spot.php');
?>

