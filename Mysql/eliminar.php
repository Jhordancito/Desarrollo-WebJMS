<?php include ("comprobar.php");
include("conexion.php");
$id=$_GET['id'];
$sql= "select fotografia FROM persona Where id=$id"; 
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();
$archivo='img/'.$fila['fotografia'];
$sql= "DELETE  FROM persona Where id=$id";
$resultado=$con->query($sql);
if (isset($archivo)) 
	unlink($archivo);
	if($resultado)
		echo "se Elimino con Exito";
	else
		echo "hubo un error";
	?>

	<meta http-equiv="refresh" content="4;URL=listar.php"> 