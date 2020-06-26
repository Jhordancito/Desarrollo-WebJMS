<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Listado de Personas relacionadas al coronavirus</title>

	<style type="text/css">
		.table{
			width: 50%;
			border-color: black;
			height: 50%
		}
		.th{
			background-color: blue; 
		}	
		.td{
			object-position: center;
		}
		.div{
			width: 25%;
		}
	</style>
</head>
<body>
<?php include("conexion.php");
$sql="select persona.id,fotografia,nombre,apellidos,edad,sexo,procedencia,celular,estado,fecha          from persona left join procedencia on persona.idprocedencia=procedencia.id";
echo $sql;   //Imprimimos para ver si esta bien
$resultado=$con->query($sql);
?>
<div class="div">
	
</div>
<center>
<table class="tabla" border="1px">
	<th class="th">Fotografia</th>
	<th class="th">Nombres</th>
	<th class="th">Apellidos</th>
	<th class="th">Edad</th>
	<th class="th">Sexo</th>
	<th class="th">Procedencia</th>
	<th class="th">Celular</th>
	<th class="th">Estado</th>
	<th class="th">Fecha</th>
	<th class="th">Operaciones</th>
	<tr>
		<?php
			while ($fila=$resultado->fetch_assoc())
			{
				?>
			
			<tr>
				<td><img src="<?php echo $fila['fotografia'];?>" alt=""></td>
				<td><?php echo $fila['nombre'];?></td>
				<td><?php echo $fila['apellidos'];?></td>
				<td><?php echo $fila['edad'];?></td>
				<td><?php echo $fila['sexo'];?></td>
				<td><?php echo $fila['celular'];?></td>
				<td><?php echo $fila['procedencia'];?></td>
				<td><?php 
				switch ($fila['estado']) {
				case 'S':
					echo "Sano";
					break;
				case 'I':
					echo "Infectado";
					break;
				case 'O':
					echo "Sospechoso";
					break;
				case 'P':
					echo "por Confirmar";
					break;
				case 'R':
					echo "Recuperado";
					break;

				}

				;?></td>
				<td><?php echo $fila['fecha'];?></td>
				<td>
					<a href="formeditar.php?id=<?php echo $fila['id'];?>"><img src="img/editar.png" width="15px"> Editar</a> 
					<a href="eliminar.php?id=<?php echo $fila['id'];?>"><img src="img/eliminar.png" width="15px"> Eliminar</a>
				</td>
			<tr>
			<?php
				
			}
		?>
	</tr>
</table>
</center>
<ul >
	<li><a href="forminsertar.html">Insertar Persona</a></li>

</ul>
</body>
</html>