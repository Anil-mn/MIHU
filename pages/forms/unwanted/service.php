
<?php
SESSION_START();
if(!isset($_SESSION['username'])){
	header('location:admin.php');
}
else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap-4 Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.html"><img src="../../images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-image-filter"></i>ADDMIN</a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="mdi mdi-email-outline"></i>service</a>
          </li>
          <li class="nav-item">
            <a href="user.php" class="nav-link"><i class="mdi mdi-calendar"></i>user</a>
          </li>
        </ul>
       
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="../../images/faces/may i help you.png" alt="image"/> <span class="online-status online"></span> </div>
              
            </div>
          </li>
        <li class="nav-item"><a class="nav-link" href="../../pages/forms/user.php"><img class="menu-icon" src="../../images/menu_icons/01.png" alt="menu icon"><span class="menu-title">User</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/place.php"><img class="menu-icon" src="../../images/menu_icons/02.png" alt="menu icon"><span class="menu-title">Place</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/hotel.php"><img class="menu-icon" src="../../images/menu_icons/03.png" alt="menu icon"><span class="menu-title">Hotels</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/service.php"><img class="menu-icon" src="../../images/menu_icons/04.png" alt="menu icon"><span class="menu-title">Service stations</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/spot.php"><img class="menu-icon" src="../../images/menu_icons/05.png" alt="menu icon"><span class="menu-title">Tourist spot</span></a></li>
             <li class="nav-item"><a class="nav-link" href="../../pages/forms/eme.php"><img class="menu-icon" src="../../images/menu_icons/05.png" alt="menu icon"><span class="menu-title">EME numbers</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/tolls.php"><img class="menu-icon" src="../../images/menu_icons/06.png" alt="menu icon"><span class="menu-title">TOLLS</span></a></li>
<li class="nav-item"><a class="nav-link" href="../../pages/forms/package.php"><img class="menu-icon" src="../../images/menu_icons/06.png" alt="menu icon"><span class="menu-title">package</span></a></li>         
		 <li class="nav-item"><a class="nav-link" href="../../pages/forms/logout.php"><img class="menu-icon" src="../../images/menu_icons/06.png" alt="menu icon"><span class="menu-title">log out</span></a></li>
            
            
              
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">sevice</h4>
                  <p class="card-description">
                 add here
                  </p>
                  <form class="forms-sample" action="addingser.php" enctype="multipart/form-data" method="POST">
                   
					<div class="form-group">
                      <label for="exampleInputName1">place</label>
                      <input type="text" class="form-control" name="place" placeholder="place_Name">
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail3">type</label>
                      <input type="text" class="form-control" name="type" placeholder="type">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">details</label>
                      <input type="text" class="form-control" name="details" placeholder="link">
                    </div>
                   
                    
                    <div class="form-group">
                      <label for="exampleInputCity1">phone number</label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputCity1">photo</label>
                      <input type="file"  name="image" placeholder="image">
                    </div>
					
				
                    
                    <button type="submit" class="btn btn-primary btn-rounded btn-fw" >ADD</button>
                    <button class="btn btn-light"  formaction="#" >Cancel</button>
                  </form>
                </div>
                  </div>
                </div>
                <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">user photo</h4>
                      <p class="card-description">
                        adding photo to user
                      </p>
                      <form class="forms-sample"  action="servimgupload.php" enctype="multipart/form-data" method="post">
                        <div class="form-group row">
                           <div class="form-group">
                     

 <label for="exampleFormControlSelect3">select a photo</label>
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

 <label>File upload</label>
                      <input type="file" name="image" >
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
						</div>
                          </div>
                        </div>
                        
                         <button type="submit" class="btn btn-success"><i class="mdi mdi-cloud-download"></i>upload</button>
                        <button class="btn btn-success"><i class="mdi mdi-loop" formaction="#"></i>Reset</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">update</h4>
                  <p class="card-description">
                   update user details
                  </p>
                  <form class="forms-sample" action="updateservice.php" method="POST">
				  <div class="form-group">
                      <label for="exampleInputName1">id</label>
                      <input type="text" class="form-control" name="id" placeholder="id">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">type</label>
                      <input type="text" class="form-control" name="type" placeholder="type">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">place</label>
                      <input type="text" class="form-control" name="place" placeholder="place">
                    </div>
					
					
                    <div class="form-group">
                      <label for="exampleInputName1">"phone number</label>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number">
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputName1">details</label>
                      <input type="text" class="form-control" name="details" placeholder="Email">
                    </div>
                    
					
					
                    
                    
                    <button type="submit" class="btn btn-success">UPDATE</button>
                            <button class="btn btn-light"  formaction="#" >Cancel</button>
                  </form>
				  <br></br>
				  
				  <h4 class="card-title">delete details </h4>
                  <p class="card-description">
                 delete details from hotel
                  </p>
                  <form class="forms-sample" action="deleteser.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">id</label>
                      <input type="text" class="form-control" name="id" placeholder="id">
                    </div>
					
                    
                    <button type="submit"  class="btn btn-info"><i class="mdi mdi-delete"></i>delete</button>
                    <button class="btn btn-inverse-danger btn-fw"formaction="#" >Cancel</button>
                  </form>
                </div>
              </div>
            </div>
			  
			
	<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">details</h4>
                  <p class="card-description">
                   user details
				   <br></br>
<?php

include('conn.php');
$query = mysqli_query($con, "SELECT * FROM `service` ");
?>

<table cellpadding="5" border="1">
<tr><th>Location id</th><th>Location Name</th><th>type</th><th>details</th><th>phone</th><th>logitude</th></tr>

<?php
while($row = mysqli_fetch_array($query))
{ 
echo "<tr><td>".$row['service_id']."</td><td>".$row['name']."</td><td>".$row['type']."</td><td>".$row['details']."</td><td>".$row['phone']."</td><td><img src='".$row['logitude']."'/></td><td>".$row['lattitude']."</td></tr>"; 
}?>




</table>

             
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
<?php
}?>
