<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$location=$_POST['location'];


$query="DELETE FROM `tbl_toll` WHERE  toll_id='$id'  ";

$result=mysqli_query($link,$query);
header('Location: tolls.php');
?>