<?php  
/*
 *Clase Identificacion.
**/

class Identificacion{
	//Atributos
	private $identificacion;
	private $tipo;

	//Getter y setters de atributos.
	public function setIdentificacion($identificacion){
		$this->identificacion = $identificacion;
	}
	public function getIdentificacion(){
		return $this->identificacion;
	}
}
?>