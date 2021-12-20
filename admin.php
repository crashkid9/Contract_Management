<?php
session_start();
?>




</head>
<body>
<p>Geben Sie bitte ein neues Produkt ein</p> <form action = "db_erzeugen.php" method = "post"> <p>
<p><input type="text"  name="name" />Name</p> 
<p><input type="text"  name="beschreibung"/>Beschreibung</p> 
<p><input type="text"  name="preis"/>Preis</p> 
<p><select name="kategorie" >
<option value="monitor">Monitore</option>
<option value="computer">Computer</option>
<option value="notebooks">Notebooks</option>
<option value="zubehoer">zubehoer</option>
</select> Kategorie</p>
<p><input type="submit" name="Eintragen" />
<input type="reset" /></p>
</form>
</body>
</html>

<li><a href="bewertungen/index.php"><span class="glyphicon glyphicon-log-out"></span>Übersicht der Bewertungen</a></li>



<li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Ausloggen</a></li>