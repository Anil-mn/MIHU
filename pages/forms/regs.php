<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	
$User_Name=$_POST['User_Name'];
$First_Name=$_POST['First_Name'];
$Second_Name=$_POST['Second_Name'];
$Email=$_POST['Email'];
$phno=$_POST['phno'];
$PIN=$_POST['PIN'];
$query="INSERT INTO `tbl_user`( `user_name`, `first_name`, `last_name`, `email_id`, `phone_no`, `pin`) VALUES  ('$User_Name','$First_Name','$Second_Name','$Email','$phno','$PIN')";
require_once('conn.php');
if(mysqli_query($con,$query)){
echo 'registration sucesse'	;
}
else{
	echo 'not ';
}
mysqli_close($con);
}
?>