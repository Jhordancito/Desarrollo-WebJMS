 <?php 
 $cadena=$_POST['txtcadena'];
 $pirm=strlen("$pir");
$k=($pirm/2)-1;
 $p=1;$s=1;$c=1;
 for($j=1;$j<=$pirm+1;$j++)
 { 

echo '<center>'.substr("$pir",$k,$j),"<br><br>".'</center>';


$c=$c+1;
if($c>1)
if($k== -$k)
$k=0;
else
$k=$k-1;
$s=1;
$j=$j+1;

 }
 

 
?> 