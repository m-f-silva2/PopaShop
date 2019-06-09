<?php  namespace Iterator;
/**
 *Patron Iterator.
 *Clase AgregadoProductos.
 **/
class AgregadoProductos implements IAgregado{

	private $listProductos;

	public function AgregadoProductos(){

	}
	
	public static function agregar ($producto){
	    array_push($this->listProductos, $producto);
	}

	//@Override
	public function crearIterator(){
		return new ListaPersonasIterator(personas);
	}
}
?>