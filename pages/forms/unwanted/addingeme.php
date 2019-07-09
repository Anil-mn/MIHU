<?php
$link=mysqli_connect("Localhost", "root", "", "mihydb");
$name=$_POST['name'];
$phone=$_POST['phone'];
$image=$_POST['image'];
$query="INSERT INTO `tbl_eme_no`(`eme_cata`,`eme_number`,`photo`) VALUES ('$name','$phone','$image')";
mysqli_query($link,$query);
//header('Location: eme.php');
?>