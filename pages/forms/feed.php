<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['f'];	
$feedback=$_POST['nam'];

$query="INSERT INTO `feedback`(`name`,`feedback`) VALUES  ('$name','$feedback')";
require_once('conn.php');
if(mysqli_query($con,$query)){
echo 'registration sucesses';
}
else{
	echo 'not ';
}
mysqli_close($con);
}
?>