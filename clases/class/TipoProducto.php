<?php  namespace clase;
/*
 *clase TipoProducto.
**/
class TipoProducto{
	//Atributos
	private $nombre;

	//Getter y setter
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
}
?>