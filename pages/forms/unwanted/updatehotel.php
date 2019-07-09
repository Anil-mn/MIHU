<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$place=$_POST['place'];
$name=$_POST['name'];
$phno=$_POST['phno'];
$details=$_POST['details'];
$price=$_POST['price'];


$query="UPDATE `tbl_res` SET `re_name`='$name',`place`='$place',`re_details`='$details',`price`=$price,`re_ph_no`='$phno' WHERE `re_id` = '$id'"; 
$result=mysqli_query($link,$query);
header('Location:hotel.php');
?>