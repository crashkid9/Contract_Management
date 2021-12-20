<?php

//Hier werden die Datenbankverbindungen eingetragen
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'conma');
 
 $conn = new mysqli(DBHOST,DBUSER,DBPASS, DBNAME);
 

 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 




