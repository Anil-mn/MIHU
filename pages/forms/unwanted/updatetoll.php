<?php
$link=mysqli_connect("Localhost","root","","mihydb");
$id=$_POST['id'];
$price=$_POST['price'];
$vechtype=$_POST['vechtype'];
$query="UPDATE `tbl_toll` SET type='$vechtype' ,amout='$price' WHERE toll_id='$id'";
$result=mysqli_query($link,$query);

?>
