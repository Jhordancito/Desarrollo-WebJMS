<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		/*$cadena = "hola Mundo";
		$anios12 = "12";
		$nombre = "James";
		$apellido = "Bond";
		$edad = 12;

		echo $nombre."".$apellido;
		echo "El nombre completo es: \"$nombre $apellido\"";
		*/

		/*$edad= 36;
		if($edad>40){
			echo "<p>Bienvenido a nuestra Pagina</p>";
		}
		else if($edad>30){
			echo "<p>Lo sentimos, no puedes tener acceso a la página</p>";
		} else if($edad>18){
			echo "<p>tu edad es $edad</p>";
		}
		else{
			echo "<p>Tu edad es de $edad años</p>";# code...
		}

		echo "<p>Tu edad es de $edad años</p>";
		*/

		/*$dia=12;
		switch($dia){
			case 1:
				$mensaje = "<p>Odios los lunes....</p>";
				break;
			case 2:
				$mensaje = "<p>Martes....</p>";
				break;
			case 3:
				$mensaje = "<p>Miercoles....</p>";
				break;
			case 4:
				$mensaje = "<p>Jueves....</p>";
				break;
			default:
				$mensaje = "<p>Finde semana</p>";
		}

		echo "$mensaje"
		*/
		/*while*/
		/*$contador = 0;
		while($contador<10){
			echo "<p>El valor del contador es $contador</p>";
			$contador++;
		}
		echo "Fin del ciclo, el contador es $contador"
		*/
		/*do while*/

		/*$numElementos = 10;
		for($i=0;$i<$numElementos;$i++){
			echo "<p>El valor del indice es $i</p>";
		} 
		echo "El valor del indice es $i"
		*/
		$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo","Junio","Julio");


		$dias[] = "Lunes";
		$dias[] = "Martes";
		$dias[] = "Miercoles";

		$alumnos[0] = "Paola";
		$alumnos[1] = "Carmen";
		$alumnos[2] = "Sole";

		echo "<ul>";

		for($i=0;$i<count($alumnos); $i++){
			echo "<li> $alumnos[$i]</li>";
		}
		echo "</ul>";

		echo "</ol";
		foreach ($meses as $mes) {
			echo "<li> $mes </li>";
		}
		echo "</ol>";


	?>
</body>
</html>