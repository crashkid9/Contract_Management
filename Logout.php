<?php


 session_start();
 
  $con = mysqli_connect("","root"); 
$db = mysqli_select_db($con, "shop"); 

mysqli_query($con, "delete from warenkorb");
 
 if (!isset($_SESSION['user'])) {
  header("Location: index.php");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: home.php");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit;
 }
 
 




 
 ?>
 