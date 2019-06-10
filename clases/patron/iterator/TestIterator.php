<?php namespace Iterator; 
/**
 *Test Iterartor
 **/
include_once './AgregadoProductos.php';
include_once '../../class/Producto.php';
include_once '../../../control/logica/ProductosGet.php';
//include_once './IIterator.php';
class TestIterator {

    private $agregadoProductos = array();
    private  $iterator;
    private $productos;
    
    public function __construct(){
        
        $this->productos= new \clase\Producto();
        $this->agregadoProductos = new \Iterator\AgregadoProductos();
        $this->productos->setIdProducto("1");
        $this->productos->setCantidadProducto(12);
	$this->productos->setFotoProducto("Fto.png");
	$this->productos->setIdTipoProducto(4);
	$this->productos->setNombreProducto("nombre");
	$this->productos->setPrecioProducto(6);
       
        
        
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
		echo "<Strong>". $this->iterator->siguiente() . "<Strong><br><br>";
	}
	
	
    }


	
}

$ver = new \Iterator\TestIterator();

?>