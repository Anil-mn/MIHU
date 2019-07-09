<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	require_once('conn.php');
	$sql="UPDATE `tbl_user` SET pin='$password' where phone_no='$phone';";
if(mysqli_query($con,$sql)){
echo 'sucess';	
}
else{
echo 'faild';
}
mysqli_close($con);}
?>