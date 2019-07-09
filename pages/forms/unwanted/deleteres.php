<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$location=$_POST['location'];


$query="DELETE FROM `tbl_res` WHERE re_id='$id' ";

$result=mysqli_query($link,$query);
mysqli_query($link, "DELETE FROM `res_img` WHERE res_id='$id'");
header('Location: hotel.php');
?>