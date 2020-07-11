<?php session_start();
$correo=$_POST['txtCorreo'];
$password=sha1($_POST['txtPassword']); //123 contraseña
include('conexion.php');
$sql="select correo,nivel from usuarios where correo='$correo' and password='$password'";
$resultado=$con->query($sql);
 if ($fila=$resultado->fetch_assoc())
{
	echo "Es Usuario Correcto";
	$_SESSION['correo']=$fila['correo'];//o $correo
	$_SESSION['nivel']=$fila['nivel'];
    header("Location: listar.php");
   }
else {
	echo "Usuario o Contraseña Incorrecto";
	?>
	<meta http-equiv="refresh" content="4;URL=login.html">
	<?php
	}
	?> 