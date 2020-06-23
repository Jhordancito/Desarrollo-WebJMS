<?php include("conexion.php");

	$nombre= $_POST['txtNombre'];
	$apellidos= $_POST['txtApellido'];
	$edad= $_POST['numEdad'];
	$sexo= $_POST['txtSexo'];
	$celular= $_POST['txtCelular'];
	$estado= $_POST['selEstado'];
	$fecha= $_POST['fecRegistro'];
	$sql= "insert into persona (nombre,apellidos,edad,sexo,celular,estado,fecha)
	values ('$nombre','$apellidos',$edad,'$sexo',$celular,'$estado','$fecha')";
	echo $sql;
	$resultado=$con->query($sql);
	if($resultado)
		echo "se Registro con Exito";
	else
		echo "hubo un error";
	?>

	<meta http-equiv="refresh" content="4;URL=listar.php"> 
