<!DOCTYPE html>
<html>
<head>
	<title>Estante</title>
</head>
<body>
<?php include("Estante.php");
$e=new estante();

$e->insertarLibro("La Odisea", 1);
$e->insertarLibro("La Iliada", 1);
$e->insertarLibro("Principito", 3);
$e->insertarLibro("Naranja Mecanica", 2);
$e->MostrarFila(1);
//echo "Elemento eliminado: ".$e->eliminarLibro(1)."<br>";
$e->mostrarEstante();
?>
</body>
</html>