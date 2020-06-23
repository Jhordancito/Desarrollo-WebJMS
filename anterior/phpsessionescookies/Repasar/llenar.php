<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="resta.php" method="POST">
<?php
		session_start();
		$n = $_POST['n'];
		$_SESSION['n']=$_POST['n'];

		 for($i=0; $i<$n; $i++){
			?>
			 <input type="text" name="x<?php echo $i; ?>">  
		<?php
		}
	?>
	<br><br>
	<?php
		
		 for($j=0; $j<$n; $j++){
			?>
			 <input type="text" name="y<?php echo $j; ?>"> 
		<?php
		}
	?>
	<br><br>

	<input type="submit" value="calcular">
</form>
</body>
</html>