<?php namespace clase;
class Departamento{
	//Atributos
    private $nombre;

    //Getter y setter
    function getNombre() {
    	return $this->nombre;
	}

 	function setNombre($nombre) {
    	$this->nombre = $nombre;
	}
}
?>