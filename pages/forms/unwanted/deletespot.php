<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$location=$_POST['location'];


$query=" DELETE FROM `spot` WHERE id='$id'  ";

$result=mysqli_query($link,$query);
mysqli_query($link, "DELETE FROM `spot_img` WHERE  id='$id'");
header('Location: spot.php');
?>