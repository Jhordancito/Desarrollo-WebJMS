<?php include("conexion.php");
$id=$_GET['id'];
$sql= "DELETE FROM persona Where id=$id"; 
$resultado=$con->query($sql);
	if($resultado)
		echo "se Elimino con Exito";
	else
		echo "hubo un error";
	?>

	<meta http-equiv="refresh" content="4;URL=listar.php"> 