<?php namespace Iterator;
/**
 *Test Iterartor
 **/
include_once 'AgregadoProductos.php';
include_once 'IIterator.php';
class TestIterator extends AgregadoProductos{

    private $agregadoProductos = array();
    private $iterator;

    public function TestIterator(){
	$this->agregadoProductos = Iterator\AgregadoProductos();
    }
    
    $this->agregadoProductos->agregar("Juan");
    $this->agregadoProductos->agregar("Pedro");
    $this->agregadoProductos->agregar("Carlos");
    $this->agregadoProductos->agregar("Roberto");

    //Obtiene iterador Concreto
    $this->iterator = $this->agregadoProductos->crearIterator();
    while($this->iterator->hayMas()){
	//Accede al elemento (retorna objeto y se parcea)
	echo $this->iterator->siguiente();
    }

}
?>