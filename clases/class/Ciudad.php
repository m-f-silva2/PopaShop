<?php namespace clase;
/*
 *Clase Ciudad.
**/

class Ciudad {
     
    private $nombre;

    public function setNombre($nombre){
     	$this->nombre = $nombre;
    }
    public function getNombre(){
    	return $this->nombre;
    }
}
?>