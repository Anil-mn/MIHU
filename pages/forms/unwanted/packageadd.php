<?php
 include('conn.php');
$name=$_POST['location'];
$image=$_POST['photo'];
$place=$_POST['place'];
$query="INSERT INTO `package`(`name`,`photo`,`place`) VALUES ('$name','$image','$place')";
$result=mysqli_query($con,$query);
header('Location: package.php');
?>
