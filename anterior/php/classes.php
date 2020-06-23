<?php
	class Operaciones{
		private $n,$cadena,$a,$b,$c;
		function __construct($n,$cadena,$a,$b,$c)
		{
			$this->n=$n;
			$this->cadena=$cadena;
			$this->a=$a;
			$this->b=$b;
			$this->c=$c;
		}
	function fibo(){
   		$a=0;  $b=1;  $c=0;
   
   		for ($i=0;$i<=$this->n;$i++){
    		$c=$a+$b;
    		$a=$b;$b=$c;
    
   			}	

  return $c;

	}
	function mayor() 
{
if($a>$b){
	if($a>$c){
		echo "el mayor es: $a";
	}
	else
	 if($b>$c){
		echo  "es mayor es: $b";

}
else 
	echo " el mayor es: $c";
}

}

	function piramide()
$cadena=$_POST['txtcadena'];
 $cadena=strlen("$cadena");
$k=($cadena/2)-1;
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