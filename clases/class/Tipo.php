<?php  
/*
 *Clase Tipo.
**/

class Tipo{
	//Atributos
	private $nombre;

	//Getter y setters de atributos.
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
}
?>