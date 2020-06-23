<!DOCTYPE html>
<html>
<head>
	<title></title>

<?php
$numero=$_GET["txtMes"];
echo "<h3> El mes <span class='white'>$numero</span> es:</h3>";
?>
<form action="#">
	<select class= "select" name="mes" id="mes">
	<option value="1" <?=1 == $numero ? 'selected' : ''
	?>>Enero</option>
	<option value="2" <?=2 == $numero ? 'selected' : ''
	?>>Febrero</option>
	<option value="3" <?=3 == $numero ? 'selected' : ''
	?>>Marzo</option>
	<option value="4" <?=4 == $numero ? 'selected' : ''
	?>>Abril</option>
	<option value="5" <?=5 == $numero ? 'selected' : ''
	?>>Mayo</option>
	<option value="6" <?=6 == $numero ? 'selected' : ''
	?>>Junio</option>
	<option value="7" <?=7 == $numero ? 'selected' : ''
	?>>Julio</option>
	<option value="8" <?=8 == $numero ? 'selected' : ''
	?>>Agosto</option>
	<option value="9" <?=9 == $numero ? 'selected' : ''
	?>>Septiembre</option>
	<option value="10" <?=10 == $numero ? 'selected' : ''
	?>>Octubre</option>
	<option value="11" <?=11 == $numero ? 'selected' : ''
	?>>Noviembre</option>
	<option value="12" <?=12 == $numero ? 'selected' : ''
	?>>Diciembre</option>
</select>
</form>
<hr>
	<a class="button" href="2.html">Volver</a>	
</head>
<body>

</body>
</html>