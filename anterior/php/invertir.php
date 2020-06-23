<!Doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="priamide.php">
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body><br></br>
<center>
<div id="cad">
<?php
$cadena=$_GET['txtcadena'];
	$inversa=strrev($cadena);
	echo 'inversa de la cadena '.$cadena.'  es= '.$inversa;
?>
</div>
</center>
</body>
</html>