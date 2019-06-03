<?php  namespace clase;
/*
 *Clase Producto.
**/

class Producto{
	//Atributos
	private $descripcion;
	private $precio;
	private $tipo;
	private $cantidad;


	//Metodos
	//Constructor
	public function __construct(){

	}

	public function primero(){

	}
	public function siguiente(){

	}
	public function hayMas(){

	}
	public function elementoActual(){

	}
	public function ordenar(){
		
	}

	//Getter y setter
	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
	public function setPrecio($precio){
		$this->precio = $precio;
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function setCantidad($cantidad){
		$this->cantidad = $cantidad;
	}
	public function getCantidad(){
		return $this->cantidad;
	}
}
?>