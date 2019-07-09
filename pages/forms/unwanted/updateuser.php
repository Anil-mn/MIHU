<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$user_Name=$_POST['user_name'];
$first_Name=$_POST['first_name'];
$phno=$_POST['phno'];
$second_Name=$_POST['second_name'];
$email=$_POST['email'];
$pin=$_POST['pin'];

$query="UPDATE `tbl_user` SET `user_name`='$user_Name',`first_name`='$first_Name',`last_name`='$second_Name',`email_id`='$email',`phone_no`='$phno',`pin`='$pin' WHERE `user_id`='$id'";
$result=mysqli_query($link,$query);
header('Location:user.php');
?>