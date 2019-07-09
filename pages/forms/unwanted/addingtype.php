<?php
$link=mysqli_connect("Localhost", "root", "", "mihydb");
$type=$_POST['type'];

$query="INSERT INTO `type`(`type`,`photo`) VALUES ('$type')";
mysqli_query($link,$query);
header('Location: place.php');
?>
