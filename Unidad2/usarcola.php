<?php
include("cola.php");
$p=new cola();
$p-> insertar("hola");
$p-> insertar("buenas");
$p-> insertar("tardes");
$p->mostrar();

echo "Elemento eliminado".$p->eliminar()."<br>";
$p->mostrar();

?>
