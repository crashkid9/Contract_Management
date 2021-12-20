<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php'; //Datenbank Verbindung in Datei gespeichert
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user']) !="" ) {
  header("Location: home.php");
  exit;
 }

 $error = false;
 
 if( isset($_POST['btn-login']) ) { // Login in den Webshopt
  
  // Login Daten nach verschiednenen Kreterien überprüfen
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);
  
  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
	//Mahßnamen gegen eine SQL Injection
  
  if(empty($email)){
   $error = true;
   $emailError = "Bitte gebe deine Email Adresse ein";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Bitte gebe eine gültige Email Adresse ein";
  }
  
  if(empty($pass)){
   $error = true;
   $passError = "Bitte gebe dein Passwort ein";
  }
  
  // Kein Kriterium erfüllt, 
  if (!$error) {
   
   $password = hash('sha256', $pass); // SHA256 Passwort Verschlüsselung
  
   $res=mysqli_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
   $row=mysqli_fetch_array($conn, $res);
   $count = mysql_num_rows($res); 
   
   if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userName'];
    header("Location: user.php"); //User Page
   } 
   
   
   else{ //Login prüfen auf Admin auf einer anderen Datenbank 
   
   $password = hash('sha256', $pass); // password hashing using SHA256
  
   $res=mysqli_query("SELECT userId, userName, userPass FROM admin WHERE userEmail='$email'");
   $row=mysqli_fetch_array($conn, $res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
   
      
   if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: admin.php"); //Admin Page
   } else {
    $errMSG = "User nicht gefunden";
   }
    
  }
  
 }
    
 }
 
 //Login Formular
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contract_Management</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<div class="container">

 <div id="login-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div class="col-md-12">
        
         <div class="form-group">
             <h2 class="">Login</h2>
            </div>
        
         <div class="form-group">
             <hr />
            </div>
            
            <?php
   if ( isset($errMSG) ) {
    
    ?>
    <div class="form-group">
             <div class="alert alert-danger">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="email" name="email" class="form-control" placeholder="Email Adresse"  maxlength="40" />
              
            </div>
            
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" name="pass" class="form-control" placeholder="Passwort" maxlength="15" />
               
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <button type="submit" class="btn btn-block btn-primary" name="btn-login">Einloggen</button>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="register.php">Registrierung.</a>
            </div>
        
        </div>
   
    </form>
    </div> 

</div>

</body>
</html>
<?php ob_end_flush(); ?>