<?php  namespace Iterator;
/**
 *Patron Iterator.
 *Clase AgregadoProductos.
 **/
require_once './IAgregado.php';
require_once './ListaProductosIterator.php';

class AgregadoProductos implements IAgregado{

	private $listProductos = array();

	public function __construct(){

	}
	
	public function agregar ($producto){
	    array_push($this->listProductos, $producto);
	}

	//@Override
	public function crearIterator(){
	    return new \Iterator\ListaProductosIterator($this->listProductos); 
	    //ListaProductosIterator($this->listProductos);
	}
}
?>