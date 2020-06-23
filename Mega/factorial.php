<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		function factorial($n)
		{
			if($n==0)
			{
				return 1;
			}
			else
			{
				return factorial($n-1)* $n;
			}
		}
		$n=$_GET['n'];
		echo "El factorial de ".$n." es = ".factorial($n);
	?>	
</body>
</html>