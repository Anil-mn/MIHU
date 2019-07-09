<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$uloginname=$_POST['uloginname'];
	$uloginpassword=$_POST['uloginpassword'];
		require_once('conn.php');
		$sql="SELECT * FROM `tbl_user` WHERE  user_name='$uloginname' AND pin='$uloginpassword'";
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
