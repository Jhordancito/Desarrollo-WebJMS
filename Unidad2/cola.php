<?php
class cola
{
	private $elementos=array();
	private $final;
	private $frente;

	function __construct()
	{
		$this->final=-1;
		$this->frente=0;
	}
	public function insertar($elemento)
	{
		$this->final++;
		$this->elementos[$this->final]=$elemento;
		
	}
	public function eliminar()
	{
		if($this->frente>$this->final){

			echo "la cola esta vacia";
		}
		else{
			$this->frente++;
			return $this->elementos[$this->frente-1];
		}

	}
	public function mostrar()
	{
		for($i=$this->frente;$i<=$this->final;$i++)
			echo $this->elementos[$i]."<br/";
	}

}

 ?>