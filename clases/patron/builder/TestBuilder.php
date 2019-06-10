<?php namespace Builder;

 include_once 'clases/patron/ProductoConcreto.php';
 include_once 'clases/patron/BuilderProducto.php';
class TestBuilder {
    private $ProductoConcreto;
    private $ProductoConcretoResultante;
    
    public function __construct() {
	$this->ProductoConcreto = new \Builder\ProductoConcreto();
	$this->ProductoConcreto->crear();
	$this->ProductoConcreto->buildCantidadProducto();
	$this->ProductoConcreto->buildFotoProducto();
	$this->ProductoConcreto->buildIdProducto();
	$this->ProductoConcreto->buildIdTipoProducto();
	$this->ProductoConcreto->buildNombreProducto();
	$this->ProductoConcreto->buildPrecioProducto();
	$this->ProductoConcretoResultante = $this->ProductoConcreto->getProducto();
	echo $this->ProductoConcretoResultante->getNombreProducto();
	
    }
}

$ver = new \Builder\TestBuilder();