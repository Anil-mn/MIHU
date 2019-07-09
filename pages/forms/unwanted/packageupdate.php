<?php
 include('conn.php');
 $id=$_POST['id'];
$name=$_POST['name'];
$image=$_POST['photo'];
$place=$_POST['place'];
$query="UPDATE `package` SET name='$name',photo='$image',place='$place' WHERE id='$id'";
$result=mysqli_query($con,$query);
header('Location: package.php');
?>
