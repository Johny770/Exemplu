<!DOCTYPE html>
<html>
<head>
	<title>Formular</title>
</head>
<body>
	<form action="receiver.php" method="post">
 		<p><b>Nume: <input type="text" name="name"></b></p>
 		<p><b>Grupa: <input type="select" name="grupa"></b></p>
 		<p><b>Gen:</b></p>
    	<p><input name="M" type="radio" value="M"> Masculin</p>
    	<p><input name="F" type="radio" value="F"> Feminin</p>
    	<p><b>Limbi vorbite:</b></p>
   		<p><input type="checkbox" name="option1" value="a1">Engleza<Br>
   		<input type="checkbox" name="option2" value="a2">Rusa<Br>
   		<input type="checkbox" name="option3" value="a3">Româna<Br> 
 		<p><input type="submit" value="Trimite"></p>
	</form>
</body>
</html>