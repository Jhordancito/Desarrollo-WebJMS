<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$n=$_POST["n"];
	$m=$_POST["m"];

	if($n%$m==0){
		?> <center><img src="images.jpg" width="300px" height="300px"></center>;
	<?php 
	}
	else{

	?>'<center><img src="imagesno.jpg" width="300px" height="300px"></center>';
	<?php }
	?>
</body>
</html>