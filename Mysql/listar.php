<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Listado de Personas relacionadas al coronavirus</title>
</head>
<body>
<?php include("conexion.php");
$sql="select id,nombre,apellidos,edad,sexo,celular,estado,fecha from persona";
//echo $sql;   //Imprimimos para ver si esta bien
$resultado=$con->query($sql);
?>
<table>
	<th>Nombres</th>
	<th>Apellidos</th>
	<th>Edad</th>
	<th>Sexo</th>
	<th>Celular</th>
	<th>Estado</th>
	<th>Fecha</th>
	<th>Operaciones</th>
	<tr>
		<?php
			while ($fila=$resultado->fetch_assoc()) {
				?>
			<tr>
				<td><?php echo $fila['nombre'];?></td>
				<td><?php echo $fila['apellidos'];?></td>
				<td><?php echo $fila['edad'];?></td>
				<td><?php echo $fila['sexo'];?></td>
				<td><?php echo $fila['celular'];?></td>
				<td><?php echo $fila['estado'];?></td>
				<td><?php echo $fila['fecha'];?></td>
				<td>
					<a href="editar.php"><img src="img/editar.png" width="15px"> Editar</a> 
					<a href="eliminar.php?id=<?php echo $fila['id'];?>"><img src="img/eliminar.png" width="15px"> Eliminar</a>
				</td>
			<tr>
			<?php
				
			}
		?>
	</tr>
</table>
<ul>
	<li><a href="forminsertar.html">Insertar Persona</a></li>

</ul>
</body>
</html>