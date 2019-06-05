<?php  namespace Clase;
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
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	public function getTipo(){
		return $this->tipo;
	}
}
?>