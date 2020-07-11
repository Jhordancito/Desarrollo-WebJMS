<?php include ("comprobar.php"); 
include("conexion.php");

	$nombre= $_POST['txtNombre'];
	$apellidos= $_POST['txtApellido'];
	$edad= $_POST['numEdad'];
	$sexo= $_POST['txtSexo'];
	$idprocedencia=$_POST['selProcedencia'];
	$celular= $_POST['txtCelular'];
	$estado= $_POST['selEstado'];
	$fecha= $_POST['fecRegistro'];
	//echo $_FILES['imgfotografia']['name']; recibir con el nombre de la imagen
	//echo $_FILES['imgfotografia']['tmp_name']; recibir con el archivo temporal

	$separado = explode(".",$_FILES['imgfotografia']['name']);
	$extension=$separado[1];
	$fotografia=$celular.".".$extension;
	$sql= "insert into persona (fotografia,nombre,apellidos,edad,sexo,idprocedencia,celular,estado,fecha)
	values ('$fotografia','$nombre','$apellidos',$edad,'$sexo','$idprocedencia',$celular,'$estado','$fecha')";
	//echo $sql;
	$resultado=$con->query($sql);
	copy($_FILES['imgfotografia']['tmp_name'], 'img/'.$fotografia);
	if($resultado)
		echo "se Registro con Exito";
	else
		echo "hubo un error";
	?>

	<meta http-equiv="refresh" content="4;URL=listar.php"> 
