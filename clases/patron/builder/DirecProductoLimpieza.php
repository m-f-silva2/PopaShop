<?php namespace Builder;

 require_once './ProductoConcLimpieza.php';
 require_once 'BuilderProducto.php';
class TestBuilder {
    private $ProductoConcreto;
    private $ProductoConcretoResultante;
    
    public function __construct() {
	$this->ProductoConcreto = new \Builder\ProductoConcLimpieza();
	$this->ProductoConcreto->crear();
	$this->ProductoConcreto->buildCantidadProducto();
	$this->ProductoConcreto->buildFotoProducto();
	$this->ProductoConcreto->buildIdProducto();
	$this->ProductoConcreto->buildIdTipoProducto();
	$this->ProductoConcreto->buildNombreProducto();
	$this->ProductoConcreto->buildPrecioProducto();
	$this->ProductoConcretoResultante = $this->ProductoConcreto->getProducto();
	print_r($this->ProductoConcretoResultante);
	
    }
}

$ver = new \Builder\TestBuilder();