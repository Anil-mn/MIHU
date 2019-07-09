<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$newuser=$_POST['user name'];
	$username=$_POST['phone'];
	require_once('conn.php');
	$sql="UPDATE `tbl_user` SET user_name='$newuser' where user_name='$username';";
if(mysqli_query($con,$sql)){
echo 'sucess';	
}
else{
echo 'faild';
}
mysqli_close($con);}
if($_SERVER['REQUEST_METHOD']=='POST'){
	$newemail=$_POST['user name'];
	$email=$_POST['phone'];
	require_once('conn.php');
	$sql="UPDATE `tbl_user` SET user_name='$newemail' where user_name='email';";
if(mysqli_query($con,$sql)){
echo 'sucess';	
}
else{
echo 'faild';
}
mysqli_close($con);}
?>