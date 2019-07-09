<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$name=$_POST['name'];
$place=$_POST['place'];
$details=$_POST['details'];
$query="UPDATE `spot` SET `name`='$name',`place`='$place',`details`='$details' WHERE `id`='$id'";
$result=mysqli_query($link,$query);
header('location:spot.php');
?>
