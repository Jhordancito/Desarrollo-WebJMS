<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<?php
	/* 1 1 2 3 5 8 13 .... */	

	$numero=7;
	$n1=0;
	$n2=1;
	$n3=1;

	echo "1 ";

	for($i=0;$i<$numero;$i++){
		$n3= $n1+$n2;
		$n1=$n2;
		$n2= $n3;

		echo  "&nbsp;".$n3;	
	}
?>
</body>
</html>