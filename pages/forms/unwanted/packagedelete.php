<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$query="DELETE FROM `package` WHERE id='$id'";
$result=mysqli_query($link,$query);
header('Location: package.php');
?>