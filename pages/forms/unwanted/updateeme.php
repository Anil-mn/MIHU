<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$cata=$_POST['cata'];
$number=$_POST['number'];
$query="UPDATE `tbl_eme_no`  SET eme_cata='$cata' ,eme_number='$number' WHERE eme_id='$id'";
$result=mysqli_query($link,$query);
header('location:eme.php');
?>
