<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vocales</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php

		 $las_vocales = array ('a','e','i','o','u');

		/*foreach ($las_vocales as $elem){
			echo $elem.'<br>';
		} */

		for ($i=0;$i<count($las_vocales);$i++){
			echo $las_vocales[$i].'<br>';
		}

	?>	
</body>
</html>