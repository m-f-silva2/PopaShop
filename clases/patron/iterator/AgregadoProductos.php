<?php  namespace Iterator;
/**
 *Patron Iterator.
 *Clase AgregadoProductos.
 **/
require_once './IAgregado.php';
class AgregadoProductos implements IAgregado{

	private $listProductos = array();

	public function AgregadoProductos(){

	}
	
	public function agregar ($producto){
	    array_push($this->listProductos, $producto);
	}

	//@Override
	public function crearIterator(){
		return new ListaPersonasIterator(personas);
	}
}
?>