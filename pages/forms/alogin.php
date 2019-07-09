
<?php
require_once('conn.php');
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM `tbl_user` WHERE `user_name` ='$username' and  `pin`='$password'";
$result = mysqli_query($con, $query);
$check = mysqli_fetch_array($result);
if(isset($check)){
	echo "login Successful";
}
else{
	echo "Login failure";
}
?>
