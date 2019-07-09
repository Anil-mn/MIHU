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
            <a href="#" class="nav-link"><i class="mdi mdi-email-outline"></i>USER</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link"><i class="mdi mdi-calendar"></i>TABLE</a>
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
              <div class="profile-image" href="../../index.html"> <img src="../../images/mihu.png" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">MIHU</p>
                <p class="designation">May I Help You</p>
                <div class="badge badge-teal mx-auto mt-3">Runnig</div>
              </div>
            </div>
         
          </li>
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/user.php"><img class="menu-icon" src="../../images/menu_icons/11.png" alt="menu icon"><span class="menu-title">User</span></a></li>
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/place.php"><img class="menu-icon" src="../../images/menu_icons/12.png" alt="menu icon"><span class="menu-title">Place</span></a></li>
          
           <li class="nav-item"><a class="nav-link" href="../../pages/forms/eme.php"><img class="menu-icon" src="../../images/menu_icons/13.png" alt="menu icon"><span class="menu-title">EME numbers</span></a></li>
         
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/package.php"><img class="menu-icon" src="../../images/menu_icons/12.png" alt="menu icon"><span class="menu-title">package</span></a></li>
		  <li class="nav-item"><a class="nav-link" href="../../pages/forms/logout.php"><img class="menu-icon" src="../../images/menu_icons/14.png" alt="menu icon"><span class="menu-title">log out</span></a></li>
            
            
              
      </nav>
      <!-- partial -->
     
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">user registration</h4>
                  <p class="card-description">
                   user can register here
                  </p>
                  <form class="forms-sample" action="user_reg.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">username</label>
                      <input type="text" class="form-control" name="User_Name" placeholder="User_Name">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">first nmae</label>
                      <input type="text" class="form-control" name="First_Name" placeholder="First_Name">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">secound name</label>
                      <input type="text" class="form-control" name="Second_Name" placeholder="Second_Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" name="Email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputCity1">phone number</label>
                      <input type="text" class="form-control" name="phno" placeholder="Phone number">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" name="PIN" placeholder="PIN">
					  
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword4">user photo</label>
                      <input type="file" name="image">
                    </div>
                    
                    
                    
                    <button type="submit" class="btn btn-info btn-fw">SIGN UP</button>
                    <button class="btn btn-inverse-danger btn-fw"  formaction="#" >Cancel</button>
                  </form>
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
                  <form class="forms-sample" action="updateuser.php" method="POST">
				  <div class="form-group">
                      <label for="exampleInputName1">id</label>
                      <input type="text" class="form-control" name="id" placeholder="id">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">username</label>
                      <input type="text" class="form-control" name="user_name" placeholder="User_Name">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">first nmae</label>
                      <input type="text" class="form-control" name="first_name" placeholder="First_Name">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">secound name</label>
                      <input type="text" class="form-control" name="second_name" placeholder="Second_Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputCity1">phone number</label>
                      <input type="text" class="form-control" name="phno" placeholder="Phone number">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputPassword4">Password</label>
                      <input type="password" class="form-control" name="pin" placeholder="PIN">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-success btn-fw">UPDATE</button>
                    <button class="btn btn-inverse-danger btn-fw"  formaction="#" >Cancel</button>
                  </form>
                </div>
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
$query = mysqli_query($con, "SELECT * FROM `tbl_user`");
?>
<div style="overflow-x:scroll;     overflow:scroll;  width:600; height: 300px">
<table cellpadding="5" border="1">
<tr><th>user_id</th><th>user name</th><th>First name</th><th>last name</th><th> email id</th><th>phno</th></tr>

<?php
while($row = mysqli_fetch_array($query))
{ 
echo "<tr><td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['email_id']."</td><td>".$row['phone_no']."</td></tr>";  
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
