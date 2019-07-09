<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$location=$_POST['location'];
$type=$_POST['type'];

$details=$_POST['details'];
$logitude=$_POST['logitude'];
$photo=$_POST['photo'];

$query="UPDATE `tbl_place` SET location_name='$location',type='$type',name='$details',logitude='$logitude',photo='$photo' WHERE location_id='$id'";
$result=mysqli_query($link,$query);

//header('Location:place.php');

?>