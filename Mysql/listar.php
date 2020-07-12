<?php include ("comprobar.php");
?>
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
			background-color: yellow; 
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
$orden=$_GET['orden'];
$forma=$_GET['forma'];
if(!isset($_GET['orden']))
{
	$orden="id";
	$forma="";
}
$sql="select persona.id,fotografia,nombre,apellidos,edad,sexo,procedencia,celular,estado,fecha          from persona left join procedencia on persona.idprocedencia=procedencia.id order by ".$orden."".$forma;
if($forma=="")
	$forma="desc";
	else
	$forma="";
//echo $sql;   //Imprimimos para ver si esta bien
echo "Usted esta Auntenticado como ".$_SESSION['correo'];
$resultado=$con->query($sql);
?>
<div class="div">
	
</div>
<a href="cerrar.php">Cerrar Session </a>
<center>
<table class="tabla" border="1px">
	<th class="th">Fotografia</th>
	<th class="th"><a href="listar.php?orden=nombre&forma=<?php if ($orden=="nombre") echo $forma;?>"> Nombres</th></a>
	<th class="th"><a href="listar.php?orden=apellidos&forma=<?php if ($orden=="apellidos") echo $forma;?>">Apellidos</th></a>
	<th class="th"><a href="listar.php?orden=edad&forma=<?php if ($orden=="edad") echo $forma;?>">Edad</th></a>
	<th class="th"><a href="listar.php?orden=sexo&forma=<?php if ($orden=="sexo") echo $forma;?>">Sexo</th></a>
	<th class="th"><a href="listar.php?orden=celular&forma=<?php if ($orden=="celular") echo $forma;?>">Celular</th></a>
	<th class="th"><a href="listar.php?orden=procedencia&forma=<?php if ($orden=="procedencia") echo $forma;?>">Procedencia</th></a>
	<th class="th"><a href="listar.php?orden=estado&forma=<?php if ($orden=="estado") echo $forma;?>">Estado</th></a>
	<th class="th"><a href="listar.php?orden=fecha&forma=<?php if ($orden=="fecha") echo $forma;?>">Fecha</th></a>
	<th class="th">Operaciones</th>
	<tr>
		<?php
			while ($fila=$resultado->fetch_assoc())
			{
				?>
			
			<tr>
				<td><img src="<?php echo 'img/'.$fila['fotografia'];?>"alt="" width="60"></td>
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
				<?php if ($_SESSION['nivel']==1)
				{?>
					<a href="formeditar.php?id=<?php echo $fila['id'];?>"><img src="img/editar.png" width="15px"> Editar</a> 
					<a href="eliminar.php?id=<?php echo $fila['id'];?>"><img src="img/eliminar.png" width="15px"> Eliminar</a>
					<?php }?>
				</td>
			<tr>
			<?php
				
			}
		?>
	</tr>
</table>
</center>
<ul>

	<?php if ($_SESSION['nivel']==1)
	{?>
	<li><a href="forminsertar.php">Insertar Persona</a></li>
	<?php } ?>
</ul>
</body>
</html>
