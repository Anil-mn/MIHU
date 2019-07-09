<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>May I Help You....?</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/mihu.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
       <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          <li class="nav-item">
            <a href="../../index.html" class="nav-link"><i class="mdi mdi-image-filter"></i>About</a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link"><i class="mdi mdi-email-outline"></i>ADMIN</a>
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
            <a class="nav-link count-indicator dropdown-toggle"  href="#" \>
              <i class="mdi mdi-email-variant"></i>
			  <span class="count">F</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
             <div class="dropdown-divider"></div>
			 </div>
			 
              
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" href="#">
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
          
          <li class="nav-item"><a class="nav-link" href="#"><img class="menu-icon" src="../../images/menu_icons/12.png" alt="menu icon"><span class="menu-title">Place</span></a></li>
         <li class="nav-item"><a class="nav-link" href="#"><img class="menu-icon" src="../../images/menu_icons/13.png" alt="menu icon"><span class="menu-title">EME numbers</span></a></li>
        
		 <li class="nav-item"><a class="nav-link" href="#"><img class="menu-icon" src="../../images/menu_icons/14.png" alt="menu icon"><span class="menu-title">log out</span></a></li>
            
           
              
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
                      <h4 class="card-title">ADMIN login</h4>
                      <p class="card-description">
                       ADMIN login
                      </p>
					  <form action="adminlogin.php" method="POST">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                          </div>
                          <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div></div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success btn-rounded btn-fw">LOGIN</button>
                        <button class="btn btn-inverse-danger btn-rounded btn-fw" formaction="#">cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              
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
