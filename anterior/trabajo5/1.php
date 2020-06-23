<!DOCTYPE html>
<html>
<head>
	<title>Num 1</title>
</head>
<body>
	<?php
		$num=$_POST["num"];
		echo "<p>El numero enviado fue $num por lo q sera $num filas y 1 columna</p>";
		echo "<table>";
		for ($i=1;$i<=$num;$i++){
		echo "<tr>
				<td class='ancho'>$i</td>
			</tr>";
		}
		echo "</table";
		?>
		<hr>
		<a class="button" href="5.html">Volver</a> 
		<div id="copyright">
			<b>Nombre:</b> <span>Jhordan Montero Serrano <br> <span><b>Carreras:</b></span> Ing. de Sistemas---Ing. de la informacion y seguridad </span>
	</div>
	
</body>
</html>