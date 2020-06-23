
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="stilos.css">
	<meta charset="UTF-8">
	<title>Num 1</title>
</head>
<body>
	<?php 
	$num=$_POST["num"];
	echo "<p>El numero enviado fue $num por lo que seran $num filas y 1 columna</p>";
	echo "<table>";
	for ($i=1; $i<=$num ; $i++) { 
		echo "<tr>
				<td class='ancho'>$i</td>
			   </tr>";
	}
	echo "</table>";
	 ?>
	 <hr>
	 <a class="button" href="00.php">VOLVER</a>
	 <div id="copyright">
			<b>Nombre:</b> <span>Jhordan Montero Serrano <br> <span><b>Carreras:</b></span> Ing. de Sistemas---Ing. de la informacion y seguridad </span>
	</div>
</body>
</html> 