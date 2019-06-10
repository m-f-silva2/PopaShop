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
       $this->agregadoProductos = new \Iterator\AgregadoProductos();
        foreach ($datoCategorias as $dato1) {
       $this->productos= new \clase\Producto();
	    $this->productos->setIdProducto($dato1["idProducto"]);
	    $this->productos->setIdTipoProducto($dato1["idTipoProducto"]);
	    $this->productos->setNombreProducto($dato1["nombreProducto"]);
	    $this->productos->setPrecioProducto($dato1["precioProducto"]);
	    $this->productos->setCantidadProducto($dato1["cantidadProducto"]);
	    $this->productos->setFotoProducto($dato1["fotoProducto"]);
	    $this->productos->setIdUsuario($dato1["idUsuario"]);
	    $this->agregadoProductos->agregar($this->productos);
        }

	
	//Obtiene iterador Concreto
	$this->iterator = $this->agregadoProductos->crearIterator();
	while($this->iterator->hayMas() ){
		//Accede al elemento (retorna objeto y se parcea)
	    echo "<br>";
	    print  $this->iterator->siguiente()->getNombreProducto();
	    echo "<br>";
	    print  $this->iterator->siguiente()->getPrecioProducto();
	    //..
	    //..
	}
	
	
    }


	
}

$ver = new \Iterator\TestIterator();

?>