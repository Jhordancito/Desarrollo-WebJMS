<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	
function factorial($n)
{
	if($n==0)
		return 1;
	else
		return factorial($n-1)*$n;

}
$n=$_GET['n'];
echo "El factorial de ".$n. "es = ".factorial($n);

?>

</body>
</html>