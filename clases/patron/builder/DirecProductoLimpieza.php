<?php namespace Builder;

 require_once 'clases/patron/builder/ProductoConcLimpieza.php';
 require_once 'clases/patron/builder/BuilderProducto.php';
class DirecProductoLimpieza {
    private $ProductoConcreto;
    private $ProductoConcretoResultante;
    
    public function __construct() {
    }
    
    public function getProductoLimpiza($datos) {
	$this->ProductoConcreto = new \Builder\ProductoConcLimpieza($datos);
	$this->ProductoConcreto->crear();
	$this->ProductoConcreto->buildCantidadProducto();
	$this->ProductoConcreto->buildFotoProducto();
	$this->ProductoConcreto->buildIdProducto();
	$this->ProductoConcreto->buildIdTipoProducto();
	$this->ProductoConcreto->buildNombreProducto();
	$this->ProductoConcreto->buildPrecioProducto();
	return $this->ProductoConcreto->getProducto();
    }
    
}