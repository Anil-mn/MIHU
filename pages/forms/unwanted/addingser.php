<?php
$link=mysqli_connect("Localhost", "root", "", "mihydb");
$place=$_POST['place'];
$type=$_POST['type'];
$details=$_POST['details'];
$phone=$_POST['phone'];
$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"service/" . $newFilename);
	$location="service/" . $newFilename;
$latitude=$_POST['latitude'];
$query="INSERT INTO `service`( `name`, `type`, `details`, `phone`, `logitude`, `lattitude`) VALUES ('$place','$type','$details','$phone','$location','$latitude')";
$result=mysqli_query($link,$query);
header('Location:service.php');
include)
?>