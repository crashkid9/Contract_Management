<?php
session_start();
?>
	
	</html>
	</body>
	<form action="dankefuer.php" method="post">
		Name: <br /> <input type="text"
			name="nachname" size="20" maxlength="30"/> <br />
		Strasse: <br /> <input type="text"
			name="strasse" size="20" maxlength="100" /> <br />
		Postleitzahl: <br /> <input type="text"
			name="plz" size="20" maxlength="100" /> <br />
		Ort: <br /> <input type="text"
			name="ort" size="20" maxlength="100" /> <br /> <br /> 
			
		<button type="submit" name="durchfuehren">Bestellen</button> <br />
		<a href="user.php">Zurück zum Shop</a>
	</form>
</body>
</html>