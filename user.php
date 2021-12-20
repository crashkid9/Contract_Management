<?php
session_start();
?>

<html>
<body>
<h3>Willkommen im Webshop</h3>

<?php
echo "<h1> Hallo {$_SESSION['user']} </h1>";
echo "Zur Abteilung:</br>";
echo "</br>";
?>


<a href="../shop/kategorien/computer.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Computer</br></a>
<a href="../shop/kategorien/monitore.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Monitore</br></a>
<a href="../shop/kategorien/notebooks.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Notebooks</br></a>
<a href="../shop/kategorien/zubehoer.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Zubehoer</br></a>

</br>
</br>
</br>
</br>

<li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Ausloggen</a></li>
