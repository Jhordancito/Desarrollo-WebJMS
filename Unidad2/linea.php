<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$numero=$_GET['numero'];
	$factorial=1;

	for($i=1;$i<=$numero;$i++){
		$factorial = $factorial*$i;
	}
	echo "El factorial del numero ".$numero." es: ".$factorial;

	

	?>
</table>
</body>
</html>