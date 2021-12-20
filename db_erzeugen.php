<html>
<head>
<?php
if (isset($_POST["Eintragen"])) {
$con = mysqli_connect("","root"); 
mysqli_select_db($con, "shop"); 

$name = $_POST["name"];
$kategorie = $_POST["kategorie"];
$beschreibung = $_POST["beschreibung"];
$preis = $_POST["preis"];


$sql = "INSERT INTO $kategorie (name, kategorie, beschreibung, preis ) VALUES ('$name','$kategorie','$beschreibung', '$preis')";


mysqli_query($con, $sql);
$num = mysqli_affected_rows($con); if ($num>0) {
echo "<p><font color='#00aa00'>"; echo "Es wurde 1 Produkt
hinzugefügt"; echo "</font></p>";
}


else {
echo "<p><font color='#ff0000'>";
echo "Es ist ein Fehler aufgetreten, "; echo "es wurde kein Produkt
hinzugefügt"; echo "</font></p>";
}
 mysqli_close($con);
}
?>

<li><a href="admin.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Zurück</a></li>