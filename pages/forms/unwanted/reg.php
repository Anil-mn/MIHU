<?php
$link=mysqli_connect("Localhost","root","","mihydb");

$location=$_POST['location'];
$type=$_POST['type'];
$details=$_POST['details'];
$logitude=$_POST['logitude'];
$latitude=$_POST['latitude'];

$query="INSERT INTO `tbl_place`(`location_name`, `type`, `name`, `logitude`, `photo`) VALUES ('$location','$type','$details','$logitude' ,'$latitude')";
 

$result=mysqli_query($link,$query);
header('Location: place.php');

?>