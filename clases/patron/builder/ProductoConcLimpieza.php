<?php namespace Builder;
 include_once 'clases/patron/BuilderProducto.php';

 //producto concreto por categoría, por ejemplo, Aseo, 

class ProductoConcLimpieza extends BuilderProducto {
    private $datos;
    public function __construct($datos) {
	$this->producto = new \clase\Producto(); 
	$this->datos = $datos;
    } 

    public function buildCantidadProducto() {
	$this->producto->setCantidadProducto($this->datos->getCantidadProducto());
    }

    public function buildFotoProducto() {
	$this->producto->setFotoProducto($this->datos->getFotoProducto());
    }

    public function buildIdProducto() {
	$this->producto->setIdProducto($this->datos->getIdProducto());
    }

    public function buildIdTipoProducto() {
	$this->producto->setIdTipoProducto($this->datos->getIdTipoProducto());
    }

    public function buildNombreProducto() {
	$this->producto->setNombreProducto($this->datos->getNombreProducto());
    }

    public function buildPrecioProducto() {
	$this->producto->setPrecioProducto($this->datos->getPrecioProducto());
    }

}

?>
