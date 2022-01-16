<?php
session_start();
?>

<html>
<body>
<h3>Contract Management zur Verwaltung von Mobilfunkverträgen</h3> <li>   <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Ausloggen</a></li>

<?php
echo "<h1> Hallo {$_SESSION['user']} </h1>";
echo "</br>";
echo "</br>";


$con = mysqli_connect("","root"); 
mysqli_select_db($con, "conma"); 
$res = mysqli_query($con, "SELECT * FROM vertraege");


// Tabellenbeginn
echo "<table border='1'>";
// Überschrift
echo "<tr> <td>ID</td>
    <td>Name</td>";
    echo "<td>Mobilfunknummer</td>";
echo "<td>SIMNummer</td>";
echo "<td>Beschreibung</td>";

echo "<form action='../inwarenkorbzu.php' method='post'>";
$lf = 1;


$z = 1;

//Auflisten der Kateogrie
while ($dsatz = mysqli_fetch_assoc($res))
{ echo "<tr>";
echo "<td>$lf</td>";
echo "<td>" . $dsatz["ID"] . "</td>"; 
echo "<td>" . $dsatz["Mobilfunknummer"]. "</td>";
echo "<td>" . $dsatz["SIMNummer "] . "</td>";
echo "<td>" . $dsatz["Beschreibung"] . "</td>";
echo "<td><input name=anzahl$z size='5'</td>";
echo "<td><a href='../bewertungen/zubehoer/read.php?forums_id={$dsatz["id"]}'>Bewertung</a></td>";
$lf = $lf + 1; 
$z = $z +1;
}



// Buttons und Links
echo "</table>"; mysqli_close($con); 
?>


</br>
</br>
</br>
</br>


