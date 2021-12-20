<?php
session_start();



  $con = mysqli_connect("","root"); 
$db = mysqli_select_db($con, "shop"); 

mysqli_query($con, "delete from warenkorb");


echo "Danke für Ihre bestellung";
echo "</br>";
?>








<a href="user.php">Zurück zum Shop</a>
