<?php
 ob_start();
 session_start();
 require_once 'dbconnect.php'; //Datenbank Verbindung in Datei gespeichert
 
 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user']) !="" ) {
  header("Location: home.php");
  exit;
 }
 ?>
              



              
 <div class="form-group">
 <div class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
 <input type="email" name="ID" class="form-control" placeholder="ID"  maxlength="40" />
  
</div>

<div class="form-group">
 <div class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
 <input type="Mobilfunknummer" name="pass" class="form-control" placeholder="Mobilfunknummer" maxlength="15" />
   
</div>

<div class="form-group">
 <div class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
 <input type="SIMNummer" name="pass" class="form-control" placeholder="SIMNummer" maxlength="15" />
   
</div>

<div class="form-group">
 <div class="input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
 <input type="password" name="Beschreibung" class="form-control" placeholder="Beschreibung" maxlength="15" />
   
</div>

<div class="form-group">
 <hr />
</div>

<div class="form-group">
 <button type="submit" class="btn btn-block btn-primary" name="btn-login">Eintragen</button>
</div>

<div class="form-group">
 <hr />
</div>

<div class="form-group">
 <a href="user.php">Zurück</a>
</div>
 
 
 
 
 
 
 
 
 
 
 
 