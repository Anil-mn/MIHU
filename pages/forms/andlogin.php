<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=$_POST['username'];
	$password=$_POST['password'];
		require_once('conn.php');
		$sql= "SELECT * FROM `user_reg` where user_name = '$username' and pin = '$password'";
		$check=mysqli_fetch_array(mysqli_query($con,$sql));
		if(isset($check))
		{
			echo'SUCCESSFUL';
		}
		else
		{
			echo'LOGIN FAILED';
		} 
    
	mysqli_close($con);
}
else
{
	echo 'Error';
}
?>
