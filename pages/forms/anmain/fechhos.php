<?php 
 
 /*
 * Created by Belal Khan
 * website: www.simplifiedcoding.net 
 * Retrieve Data From MySQL Database in Android
 */
 
 //database constants
define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_NAME', 'mihydb');
 
 //connecting to database and getting the connection object
 $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
 //creating a query
 $stmt = $conn->prepare("SELECT `details` ,`logitude` FROM `service` where type='hospital';");
 
 //executing the query 
 $stmt->execute();
 
 //binding results to the query 
 $stmt->bind_result($details,$logitude);
 
 $stmt->bind_result( $details,$logitude);
 
 $products = array(); 
 
 //traversing through all the result 
 while($stmt->fetch()){
 $temp = array();
 
 $temp['details'] = $details; 
 $temp['logitude']=$logitude;
  
 array_push($products, $temp);
 //echo "<img src='".$logitude."'>";
 }
 
 //displaying the result in json format 
 echo json_encode($products);
 ?>