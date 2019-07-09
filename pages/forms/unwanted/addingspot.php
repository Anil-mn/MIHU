<?php
$link=mysqli_connect("Localhost", "root", "", "mihydb");

$name=$_POST['name'];
$place=$_POST['place'];
$details=$_POST['details'];

$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
	$location="upload/" . $newFilename;

$query="INSERT INTO `spot`( `name`, `place`, `details`,  `latitude`) VALUES ('$name','$place','$details','$location')";
mysqli_query($link,$query);
header('Location: spot.php');

?>