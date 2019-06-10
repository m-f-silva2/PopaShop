<?php namespace Builder;
 include_once 'clases/patron/BuilderProducto.php';

 //producto concreto por categoría, por ejemplo, Aseo, 

class ProductoConcreto extends BuilderProducto {
    public function __construct() {
	$this->producto = new \clase\Producto(); 
    } 

    public function buildCantidadProducto() {
	$this->producto->setCantidadProducto(1);
    }

    public function buildFotoProducto() {
	$this->producto->setFotoProducto("no se");
    }

    public function buildIdProducto() {
	$this->producto->setIdProducto(3);
    }

    public function buildIdTipoProducto() {
	$this->producto->setIdTipoProducto(4);
    }

    public function buildNombreProducto() {
	$this->producto->setNombreProducto("nombre");
    }

    public function buildPrecioProducto() {
	$this->producto->setPrecioProducto(6);
    }

}

?>
