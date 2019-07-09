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
  <title>May I Help YOU...?</title>
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
       
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          
          <li class="nav-item active">
            <a href="#up" class="nav-link"><i class="mdi mdi-email-outline"></i>delete</a>
          </li>
          <li class="nav-item">
            <a href="#va" class="nav-link"><i class="mdi mdi-calendar"></i>validate</a>
          </li>
        </ul>
		<ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="../../index.html" >
              <i class="mdi mdi-bell-ring"></i>
			  <span class="count">A</span>
			  </li></a>
			  <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle"  href="feedback.php" \>
              <i class="mdi mdi-email-variant"></i>
			  <span class="count">F</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
             <div class="dropdown-divider"></div>
			 </div>
			 
              
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="user.php">
              <img class="img-xs rounded-circle" src="../../images/faces/anil.jpg" alt="">
			  <span class="count">user</span>
            </a>
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
         
          <li class="nav-item"><a class="nav-link" href="../../pages/forms/place.php"><img class="menu-icon" src="../../images/menu_icons/12.png" alt="menu icon"><span class="menu-title">Place</span></a></li>
         
             <li class="nav-item"><a class="nav-link" href="../../pages/forms/eme.php"><img class="menu-icon" src="../../images/menu_icons/13.png" alt="menu icon"><span class="menu-title">EME numbers</span></a></li>
          
          
		  <li class="nav-item"><a class="nav-link" href="../../pages/forms/logout.php"><img class="menu-icon" src="../../images/menu_icons/14.png" alt="menu icon"><span class="menu-title">log out</span></a></li>
            
              
      </nav>
	  </ul>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" style=" width:auto; height:auto">
          <div class="row" id="add">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow" style=" width:auto; height:auto">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
					
                     

					 <div class="main-panel" style=" width:auto; height:auto">
        <div class="card"  style=" width:auto; height:auto">
                <div class="card-body" style=" width:auto; height:auto" id="va">
                  <h4 class="card-title">details</h4>
                  <p class="card-description">
				  user details
				  <?php

include('conn.php');
$query = mysqli_query($con, "SELECT * FROM `tbl_user`");
?>
<div style=" overflow:scroll;  width: 900px; height: 500px;">
<table cellpadding="5" border="1">
<tr><th>user_id</th><th>user name</th><th>First name</th><th>last name</th><th> email id</th><th>phno</th><th>pin</th></tr>

<?php
while($row = mysqli_fetch_array($query))
{ 
echo "<tr><td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['email_id']."</td><td>".$row['phone_no']."</td><td>".$row['pin']."</td></tr>";  
}?>


</table>
 </div>
 </div>
         </div>    
		 </div>
		 </div>
		 </div>
		
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">delete details </h4>
                  <p class="card-description">
                 delete details from place
                  </p>
                  <form class="forms-sample" action="#" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">id</label>
                      <input type="text" class="form-control" name="id" placeholder="id">
                    </div>
					 <button type="submit" name="del" class="btn btn-info"><i class="mdi mdi-delete"></i>delete</button>
                    <button class="btn btn-light"  formaction="#" >Cancel</button>
                  </form>
			  </div>
              </div>
            </div>
			<div>
			
			<?php
			if(isset($_POST['del'])){
require_once('conn.php');
$id=$_POST['id'];
$query="DELETE FROM `tbl_user` WHERE user_id='$id'";
$result=mysqli_query($con,$query);
			}
?>        


			

             
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
