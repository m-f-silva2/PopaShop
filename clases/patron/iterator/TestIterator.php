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
        $this->productos->setIdProducto("1");
        
       
      /*  require_once '../../../control/logica/ProductosGet.php';
    $datoProductos =  Logica\ProductosGet::mostrarProductosPorCategoria();
        $cont = 0;
        for ($i=0; $cont < count($datoProductos) ; $i++) { 
         
          for ($j=0; $j < 4 && $cont < count($datoProductos); $j++) { 
              $this->productos->setIdProducto($datoProductos["idProducto"]);
            
              $cont++;
          }
        
              
        }*/
        $this->agregadoProductos = new \Iterator\AgregadoProductos();
        $this->agregadoProductos->agregar($this->productos->getIdProducto());
	
	
	$this->productos = new \clase\Producto();
	$this->productos->setCantidadProducto(12);
	$this->productos->setFotoProducto(23);
	$this->productos->setIdProducto(3);
	$this->productos->setIdTipoProducto(4);
	$this->productos->setNombreProducto("nombre");
	$this->productos->setPrecioProducto(6);
	
	$this->agregadoProductos->agregar($this->productos);
	
	$this->productos = new \clase\Producto();
	$this->productos->setCantidadProducto(12);
	$this->productos->setFotoProducto(23);
	$this->productos->setIdProducto(3);
	$this->productos->setIdTipoProducto(4);
	$this->productos->setNombreProducto("nombre");
	$this->productos->setPrecioProducto(6);
	
	$this->agregadoProductos->agregar($this->productos);

	//Obtiene iterador Concreto
	$this->iterator = $this->agregadoProductos->crearIterator();
	while($this->iterator->hayMas() ){
		//Accede al elemento (retorna objeto y se parcea)
		echo "<Strong>". $this->iterator->siguiente()->getNombreProducto() . "<Strong><br><br>";
	}
	
	
    }


	
}

$ver = new \Iterator\TestIterator();

?>