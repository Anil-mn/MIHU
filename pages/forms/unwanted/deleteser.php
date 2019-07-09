<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];


$query="DELETE FROM `service` WHERE service_id='$id' ";

$result=mysqli_query($link,$query);
mysqli_query($link, "DELETE FROM `serv_img` WHERE service_id='$id'");
header('Location:service.php');
?>