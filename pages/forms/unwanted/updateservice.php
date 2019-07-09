<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$type=$_POST['type'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$details=$_POST['details'];
$query="UPDATE `service` SET `name`='$name',`type`='$type',`details`='$details',`phone`='$phone' WHERE `service_id`='$id' "; 
$result=mysqli_query($link,$query);
header('Location:service.php');
?>