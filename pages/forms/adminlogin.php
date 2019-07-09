<?php
require_once('conn.php');
SESSION_START();
$username = $_POST['username'];
$password = $_POST['password'];
$query = "select * from login_admin where user_name = '$username' and user_pass = '$password'";
$result = mysqli_query($con, $query);
$check = mysqli_fetch_array($result);
if(isset($check)){
	    $_SESSION['username'] = $_POST['username'];
		
		header('location: place.php');
		
	}
	else header('Location:admin.php');{
		
	}

