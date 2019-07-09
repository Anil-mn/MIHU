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
            <a href="#add" class="nav-link"><i class="mdi mdi-image-filter"></i>adding</a>
          </li>
          <li class="nav-item active">
            <a href="#up" class="nav-link"><i class="mdi mdi-email-outline"></i>update</a>
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
        <div class="content-wrapper">
          <div class="row" id="add">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
					
                      <h4 class="card-title">ADD A PLACE</h4>
                  <p class="card-description">
                  add details of the place
                  </p>
                  <form class="forms-sample" action="#" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">LOCATION</label>
                      <input type="text" class="form-control" name="location" placeholder="LOCATION">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">TYPE</label>
                      <input type="text" class="form-control" name="type" placeholder="catagory">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">name and details</label>
                      <input type="text" class="form-control" name="details" placeholder="NAME and details">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">excat location</label>
                      <input type="text" class="form-control" name="logitude" placeholder="excat location">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputCity1">PHOTO</label>
                      <input type="text" class="form-control" name="latitude" placeholder="PHOTO">
                    </div>
					<br></br>
			<button type="submit" class="btn btn-primary btn-rounded btn-fw" name="add">ADD</button>
                    <button class="btn btn-inverse-danger btn-rounded btn-fw"  formaction="#" >Cancel</button>
                  </form>
                </div>
              </div>
            </div>
               </div>
			   </div>
			   
			   <?php
include('conn.php');
if(!isset($_POST['add'])){}
if(isset($_POST['add'])){

$location=$_POST['location'];
$type=$_POST['type'];
$details=$_POST['details'];
$logitude=$_POST['logitude'];
$latitude=$_POST['latitude'];

$query="INSERT INTO `tbl_place`(`location_name`, `type`, `name`, `logitude`, `photo`) VALUES ('$location','$type','$details','$logitude' ,'$latitude')";
 

$result=mysqli_query($con,$query);
//header('Location: place.php');
}
?>

			   


			   <div class="col-md-6 grid-margin stretch-card" id="up">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">update</h4>
                  <p class="card-description">
                   should insert details in all field
                  </p>
                  <form class="forms-sample" action="#" method="POST">
				  <div class="form-group">
                      <label for="exampleInputName1">id</label>
                      <input type="text" class="form-control" name="id" placeholder="id">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">place name</label>
                      <input type="text" class="form-control" name="location" placeholder="enter place name">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">type</label>
                      <input type="text" class="form-control" name="type" placeholder="catagory">
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">name and details</label>
                      <input type="text" class="form-control" name="details" placeholder="NAME and details">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">excat location</label>
                      <input type="text" class="form-control" name="logitude" placeholder="excat location">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputCity1">PHOTO</label>
                      <input type="text" class="form-control" name="photo" placeholder="PHOTO">
                    </div>
					<button type="submit" class="btn btn-success btn-rounded btn-fw" name="upd">UPDATE</button>
                    <button class="btn btn-inverse-danger btn-rounded btn-fw"  formaction="#" >Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            

			<?php
include('conn.php');
if(isset($_POST['upd'])){
$id=$_POST['id'];
$location=$_POST['location'];
$type=$_POST['type'];
$details=$_POST['details'];
$logitude=$_POST['logitude'];
$photo=$_POST['photo'];
$query="UPDATE `tbl_place` SET location_name='$location',type='$type',name='$details',logitude='$logitude',photo='$photo' WHERE location_id='$id'";
$result=mysqli_query($con,$query);
}
?>
			
			
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
include('conn.php');
$id=$_POST['id'];
$location=$_POST['location'];
$query="DELETE FROM `tbl_place` WHERE location_id='$id'";$result=mysqli_query($con,$query);
			}
?>
					
                    
                    
                  
		  
			
                    
              <div>
              <div class="card" id="va">
                <div class="card-body">
			<form class="forms-sample"   method="POST">
				  <select class="form-control form-control-lg" name="type">
				  <option value="0" >select</option>
				  <option value="hotel" >hotel</option>
				  <option value="hospital" >hospital</option>
				  
				  <option value="service" >service sataion</option>
				   <option value="spot" >spot</option>
				  <option value="other" >other place</option>
				  </select>
				  <button  class="btn btn-info" type="submit">check<submit>
				  </form>
				  </div>
				  </div>
				  </div>
	 <div class="main-panel">
        <div class="card"  style=" width:1000px; height: 600px">
                <div class="card-body" id="">
                  <h4 class="card-title">details</h4>
                  <p class="card-description">
				  user details
				   <?php
				   $select=$_POST['type'];
				   

include('conn.php');
if($select=='0'){ echo "select a type";}
else{
$query = mysqli_query($con, "SELECT * FROM `tbl_place` where type='$select'");
?>
<div style="overflow-x:scroll;     overflow:scroll;  width: 600px; height: 500px">
<table class="table table-bordered"  cellpadding="5" border="1">
<tr class="table-info"><th>Location id</th><th>Location Name</th><th>Location Type</th><th>NAME</th><th>DETAILS</th><th>PHOTO</th></tr>

<?php
while($row = mysqli_fetch_array($query))
{ 
echo "<tr><td>".$row['location_id']."</td><td>".$row['location_name']."</td><td>".$row['type']."</td><td>".$row['name']."</td><td>".$row['logitude']."</td><td>".$row['photo']."</td></tr>"; 
}}?>
 </div>
 </div>
         </div>    
		 </div>
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
<?php
}?>