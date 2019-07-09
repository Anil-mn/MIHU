<?php
//SESSION_START();
//if(!isset($_SESSION['username'])){
	//header('location:admin.php');
//}
//else{
	include('spot.php');

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
            <a href="#" class="nav-link"><i class="mdi mdi-email-outline"></i>tolls</a>
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
                      <h4 class="card-title">toll</h4>
                  <p class="card-description">
                 add here
                  </p>
                  <form class="forms-sample" action="addingtoll.php" method="POST">
                   <div class="form-group">
                      <label for="exampleInputName1">place</label>
                      <input type="text" class="form-control" name="place" placeholder="place_Name">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">details</label>
                      <input type="text" class="form-control" name="details" placeholder="type of vechi">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">amount</label>
                      <input type="text" class="form-control" name="amount" placeholder="catagory">
                   
                   <div class="form-group">
                      <label for="exampleInputCity1">longitude</label>
                      <input type="text" class="form-control" name="logitude" placeholder="logitude">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputCity1">lattitude</label>
                      <input type="text" class="form-control" name="latitude" placeholder="lattitude">
                    </div>
			
                    <button type="submit" class="btn btn-primary btn-rounded btn-fw" >ADD</button>
                    <button class="btn btn-light"  formaction="#" >Cancel</button>
                  </form>
				  
				  <br></br>
				   <br></br>
				   <h4 class="card-title">delete details </h4>
                  <p class="card-description">
                 delete details from toll
                  </p>
                  <form class="forms-sample" action="deletetoll.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">id</label>
                      <input type="text" class="form-control" name="id" placeholder="id">
                    </div>
					
                    
                    <button type="submit" class="btn btn-primary btn-rounded btn-fw" >delete</button>
                    <button class="btn btn-light"  formaction="#" >Cancel</button>
                  </form>
                </div>
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
                   update eme details
                  </p>
                  <form class="forms-sample" action="updatetoll.php" method="POST">
				  <div class="form-group">
                      <label for="exampleInputName1">id</label>
                      <input type="text" class="form-control" name="id" placeholder="id">
                    </div>
				
					<div class="form-group">
                      <label for="exampleInputName1">vech type</label>
                      <input type="text" class="form-control" name="vechtype" placeholder="type">
                    </div>
                  
			
					
                    <div class="form-group">
					
                      <label for="exampleInputName1">"phone number</label>
                      <input type="text" class="form-control" name="price" placeholder="amount">
                    </div>
			
                    
                
                    <button type="submit" class="btn btn-info btn-rounded btn-fw">UPDATE</button>
                    <button class="btn btn-light"  formaction="#" >Cancel</button>
                  </form>
				  <br></br>
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
$query = mysqli_query($con, "SELECT * FROM `tbl_toll");
?>

<table cellpadding="5" border="1">
<tr><th>Location id</th><th>place</th><th>type vechi</th><th>amount</th><th>logitude</th><th>latitude</th></tr>

<?php
while($row = mysqli_fetch_array($query))
{ 
echo "<tr><td>".$row['toll_id']."</td><td>".$row['place']."</td><td>".$row['type']."</td><td>".$row['amout']."</td><td>".$row['longitude']."</td><td>".$row['latitude']."</td></tr>"; 
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
