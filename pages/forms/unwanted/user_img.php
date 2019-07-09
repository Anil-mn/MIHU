<!DOCTYPE html>

<html lang="en" >

<head>

  <meta charset="UTF-8">
 
 <title>Flat HTML5/CSS3 Login Form</title>
  
 
 
 <link rel="stylesheet" href="css/style.css">


  
</head>
<body>
<form action="user_imgupload.php" enctype="multipart/form-data" method="post">

  
<div class="login-page">
  
<div class="form">
    
<form class="login-form">
      
<input type="file" name="image">


<select name="user_id">
<option>Select</option>
<?php
include('conn.php');
$query = "SELECT * FROM `tbl_user`";
$res = mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
{
	?>

<option value="<?php echo $row['user_id']; ?>">
<?php echo $row['user_name']; ?></option>
<?php
} ?>
</select>

<form >
        <button type="submit" formaction="user_reg.html" style="float: left;width:130px;" name = ""  >exit</button>
                    </form> 
<button type="submit"style="float: right;width:130px;">Submit</button><br>






     
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    
<script  src="js/index.js"></script>



</form>
</body>

</html>
