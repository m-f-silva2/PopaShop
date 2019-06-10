<?php namespace Iterator;
/**
 *Patron Iterator.
 *Iterator Concreto
 *Clase ListaProductosIterator.
 **/
require_once 'clases/patron/iterator/IIterator.php';
class ListaProductosIterator implements IIterator{
    
    private $listProductos = array();
    private $posicion = 0;

    
    public function __construct($listProductos){
	$this->listProductos = $listProductos;
    }
    
    //@override
    public function primero(){
	return $this->personas[0];
    }
    //@override
	public function siguiente(){
	    return $this->listProductos[$this->posicion++];
    }
    //@override
    public function hayMas(){
	if($this->posicion < count($this->listProductos) && count($this->listProductos) !=0){
	    return true;
	}else{
	    return false;
	}
    }
    //@override
    public function elementoActual(){
	return $this->listProductos[$this->posicion];
    }
    //@override
    public function ordenar(){
	
    }

}

?>