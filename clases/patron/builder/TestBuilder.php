<?php namespace Builder;

 require_once 'ProductoConcreto.php';
 require_once 'BuilderProducto.php';
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