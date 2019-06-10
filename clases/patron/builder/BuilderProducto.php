<?php  namespace Builder;
/*
 *Patron builder
 *clase Builder.
**/
include_once 'clases/class/Producto.php';
abstract class BuilderProducto{
	//metodos
	protected $producto;
	
	public function crear(): void{
	    $this->producto = new \clase\Producto();
	    
	}
	public function getProducto(): \clase\Producto{
	    return $this->producto;
	}
	
	abstract public function buildIdProducto();
	abstract public function buildIdTipoProducto();
	abstract public function buildNombreProducto();
	abstract public function buildPrecioProducto();
	abstract public function buildCantidadProducto();
	abstract public function buildFotoProducto();

}
?>