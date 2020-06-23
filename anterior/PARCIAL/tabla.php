<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="colores.css">
	<title>Pregunta4</title>
</head>
<body>
<?php
	$filas=$_GET['txtFilas'];
	$columnas=$_GET['txtColumnas'];
?>
<table border="1">
<?php 
for($i=0;$i<=$filas;$i++)
{
	echo'<tr>';
	for ($j=0;$j<=$columnas;$j++){
	?>
	<td class="<?php
	if(($i+$j)%2==0)
		echo "rojo";
		else
		echo "blanco"; ?>
		">
		<?php
		if ($j%2==0)
		{
			switch($i%3)
			{
				case 0:echo "Viva";
				break;
				case 1:echo "Mi";
				break;
				case 2:echo "Sucre";
				break;
			}
		}
		else
		{
			switch($i%3)
			{
			case 0:echo "Cuna";
			  break;
			case 1:echo "de";
			  break;  
			case 2:echo "Libertad";
			  break;
			  }  

		}
		?>
	</td>
	<?php
	}
	echo"</tr>";
}
?>
</table>
</body>
</html>