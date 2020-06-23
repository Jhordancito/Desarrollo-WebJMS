<!DOCTYPE html>
<html>
<head>
	<title>Loguearse</title>
</head>
<body>
<center>
	<form action="autenticar.php" method="POST"><br><br><br>
		<label>Usuario</label>
		<input type="text" name="login" value="<?php
		 if(isset($_COOKIE['usuario'])) echo $_COOKIE['usuario'];?>"><br><br>
		<label>Password</label>
		<input type="password" name="password"><br>
		<input type="checkbox" name="cbRecordarUsuario" value="<?php
		 if(isset($_COOKIE['usuario'])) echo "cheked" ;?>">Recordar Usuario<br><br>
		<input type="submit" name="Enviar">
	
	</form>
</center>
</body>
</html>