<!DOCTYPE html>

<html lang="en" >

<head>

  <meta charset="UTF-8">
 
 <title>Flat HTML5/CSS3 Login Form</title>
  
 
 
 <link rel="stylesheet" href="css/style.css">


  
</head>
<body>
<form action="servimgupload.php" enctype="multipart/form-data" method="post">

  
<div class="login-page">
  
<div class="form">
    

      
<input type="file" name="image">


<select name="service_id">
<option>Select</option>
<?php
include('conn.php');
$query = "SELECT * FROM `service`";
$res = mysqli_query($con, $query);
while($row=mysqli_fetch_array($res))
{
	?>

<option value="<?php echo $row['service_id']; ?>">
<?php echo $row['name']; ?></option>
<?php
} ?>
</select>


<button type="submit">Submit</button><br>


<form >
        <button type="submit" formaction="addingservice.html" style="float: left;width:130px;" name = ""  >exit</button>
                    </form> 




     
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    
<script  src="js/index.js"></script>



</form>
</body>

</html>
