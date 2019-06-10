<?php namespace Iterator;
/**
 *Test Iterartor
 **/
include_once './AgregadoProductos.php';
include_once '../../class/Producto.php';
//include_once './IIterator.php';
class TestIterator {

    private $agregadoProductos = array();
    private  $iterator;
    private $productos;
    public function __construct(){
        $this->productos= new \clase\Producto();
        $this->productos->setIdProducto("1");
	$this->agregadoProductos = new \Iterator\AgregadoProductos();
        $this->agregadoProductos->agregar($this->productos->getIdProducto());
	$this->agregadoProductos->agregar("Juan");
	$this->agregadoProductos->agregar("Pedro");
	$this->agregadoProductos->agregar("Carlos");
	$this->agregadoProductos->agregar("Roberto");

	//Obtiene iterador Concreto
	$this->iterator = $this->agregadoProductos->crearIterator();
	while($this->iterator->hayMas() ){
		//Accede al elemento (retorna objeto y se parcea)
		echo "<Strong>". $this->iterator->siguiente() . "<Strong><br><br>";
	}
    }


	
}

$ver = new \Iterator\TestIterator()

?>