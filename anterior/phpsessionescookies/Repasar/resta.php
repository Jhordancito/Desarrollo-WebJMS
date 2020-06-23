<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">

<?php
session_start();
$n=$_SESSION['n'];
$resta=0;
for($i=0;$i<$n;$i++)
{
	$resta=$_POST['x'.$i]-$_POST['y'.$i];
 ?><td>
<?php echo $resta; 
?></td>
<?php
}
?>
</table>
</body>
</html>