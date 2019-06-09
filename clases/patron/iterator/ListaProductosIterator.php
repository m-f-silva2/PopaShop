<?php namespace Iterator;
/**
 *Patron Iterator.
 *Iterator Concreto
 *Clase ListaProductosIterator.
 **/
class ListaProductosIterator implements IIterator{
    
    private $listProductos = array();
    private $posicion = 0;

    
    public function ListaProductosIterator($listProductos){
	$this->listProductos = $listProductos;
        $this->posicion=0;
    }
    
    //@override
    public function primero(){
	return $this->personas[0];
    }
    //@override
	public function siguiente(){
	    return $this->personas[$this->posicion++];
    }
    //@override
    public function hayMas(){
	if($this->posicion< $this->personas.length && $this->personas.length !=0){
	    return true;
	}else{
	    return false;
	}
    }
    //@override
    public function elementoActual(){
	return $this->personas[$this->posicion];
    }
    //@override
    public function ordenar(){
	
    }

}

?>