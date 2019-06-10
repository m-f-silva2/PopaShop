<?php namespace Iterator; 
/**
 *Test Iterartor
 **/
include_once './AgregadoProductos.php';
include_once '../../class/Producto.php';
include_once './ProductosGet.php';
//include_once './../../IIterator.php';

                                
class TestIterator {

    private $agregadoProductos = array();
    private  $iterator;
    private $productos;
    
    public function __construct(){
        require_once './ProductosGet.php';
       $datoCategorias = \Iterator\ProductosGet::mostrarProductosPorCategoria();
       $this->productos= new \clase\Producto();
        foreach ($datoCategorias as $dato1) {
        
        $this->agregadoProductos = new \Iterator\AgregadoProductos();
        $this->productos->setIdProducto($dato1["idProducto"]);
        $this->productos->setIdTipoProducto($dato1["idTipoProducto"]);
        $this->productos->setNombreProducto($dato1["nombreProducto"]);
	$this->productos->setPrecioProducto($dato1["precioProducto"]);
        $this->productos->setCantidadProducto($dato1["cantidadProducto"]);
	$this->productos->setFotoProducto($dato1["fotoProducto"]);
	
	
                                }
        
        
       
        
        
        $this->agregadoProductos->agregar($this->productos->getIdProducto());
	$this->agregadoProductos->agregar($this->productos->getIdTipoProducto());
        $this->agregadoProductos->agregar($this->productos->getNombreProducto());
        $this->agregadoProductos->agregar($this->productos->getPrecioProducto());
        $this->agregadoProductos->agregar($this->productos->getCantidadProducto());
        $this->agregadoProductos->agregar($this->productos->getFotoProducto());

	//Obtiene iterador Concreto
	$this->iterator = $this->agregadoProductos->crearIterator();
	while($this->iterator->hayMas() ){
		//Accede al elemento (retorna objeto y se parcea)
		echo "<Strong>". $this->iterator->siguiente() . "<Strong><br>";
	}
	
	
    }


	
}

$ver = new \Iterator\TestIterator();

?>