<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$numero = $_GET['numero'];
	echo "<h3>El dia <span class='white'>$numero</span> es:</h3>";

	switch ($numero) {
		case '1': echo "<h3><span class='white'>Lunes</span><h3>"; break;
		case '2': echo "<h3><span class='white'>Martes</span><h3>"; break;
		case '3': echo "<span>Miercoles<span>"; break;
		case '4': echo "<span>Jueves</span>"; break;
		case '5': echo "<span>Viernes</span>"; break;
		case '6': echo "<span>Sabado</span>"; break;
		case '7': echo "<span>Domingo</span>"; break;
		default:
			echo "No Existe el dia";
			break;
	}
	?>
	
</body>
</html>