<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="stilos.css">
	<meta charset="UTP-8">
	<title>Num 2</title>
</head>
<body>
	<?php
	$filas= $_POST["filas"];
	$columnas= $_POST["columnas"];
	$altura= $_POST["altura"];
	$anchura= $_POST["anchura"];
	echo "<table ";
	echo "<tr>";
	echo "<th style='heigth: {$altura}px'>X</th>";
	for($j = 1; $j <= $columnas; $j++) {
		echo "<th style='width: {$anchura}px'> $j</th>";
	}
	echo "</tr>";
	for ($i = 1; $i <=$filas; $i++){
		echo "<tr <style= 'heigth: {$altura}px'>";
		echo "<th style= 'whidth: {$anchura}px'>$i</th>";

		for ($j = 1; $i<= $columnas; $j++) {
		echo "<td>". ($i*$j) . "</td>";
		}
	 	echo "</tr>";
	}

	echo "</table>";

	?>
	<hr>
	<a class="button" href="00.php"> volver </a>
	<div id = "copyright">
		<b>Nombre:</b> <span>Jhordan Montero Serrano <br> <span><b>Carreras:</b></span> Ing. de Sistemas---Ing. de la informacion y seguridad</span>
	</div>

</body>
</html>