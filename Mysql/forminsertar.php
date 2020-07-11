<?php include ("comprobar.php");
include("comprobaradministrador.php");
include("conexion.php");
$sql="select id,procedencia from procedencia";
$resultado=$con->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>InsertarDatos</title>
</head>
<body>
	<form action="insertar.php" method="POST" enctype="multipart/form-data" >
	<label for="imgfotografia">Fotografia:</label>
	<input type="file" name="imgfotografia"><br> 
	<label for="txtNombre">Nombre:</label>
	<input type="text" name="txtNombre"><br>
	<label for="txtApellido">Apellido:</label>
	<input type="text" name="txtApellido"><br>
	<label for="numEdad">Edad:</label>
	<input type="number" name="numEdad" max="100"><br>
	<label for="txtSexo">Sexo:</label>
	<input type="radio" name="txtSexo" value="M">Masculino
	<input type="radio" name="txtSexo" value="F">Femenino<br>
	<label for="selProcedencia">Procedencia:</label>
	<select name="selProcedencia">
		<?php
			while ($fila=$resultado->fetch_assoc())
			{
				?>
		<option value="<?php echo $fila['id'];?>"> <?php echo $fila['procedencia'];?></option>
		<?php 
		}
		?>
	</select><br>
	<label for="txtCelular">Celular:</label>
	<input type="number" name="txtCelular"><br>
	<label for="selEstado">Estado de Salud (COVID-19) :</label>
	<select name="selEstado"><br>
		<option value="S">Sano</option>
		<option value="I">Infectado</option>
		<option value="O">Sospechoso</option>
		<option value="P">Por Confirmar</option>
		<option value="R">Recuperado</option>
	</select><br>
	<label for="fecRegistro">Fecha de Registro: </label>
	<input type="date" name="fecRegistro"><br><br>
	<input type="submit" value="Registrar">

</form>
</body>
</html>
