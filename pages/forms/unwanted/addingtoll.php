<?php
$link=mysqli_connect("Localhost", "root", "", "mihydb");


$place=$_POST['place'];
$type=$_POST['details'];
$amount=$_POST['amount'];
$logitude=$_POST['logitude'];
$latitude=$_POST['latitude'];


$query="INSERT INTO `tbl_toll`( `place`, `type`, `amout`, `longitude`, `latitude`) VALUES ('$place','$type',$amount,$logitude,$latitude)";
mysqli_query($link,$query);
header('Location: tolls.php');

?>