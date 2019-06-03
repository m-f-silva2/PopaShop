<?php  namespace Observer;
/*
 *Patron observer
 *Clase Pedido.
**/
class Pedido{
	//Atributos
	private $descripcion;
	private $fecha;
	private $total;
	private $cantidad;
	private $estado;
	
	//Metodos
	public function añadir(){

	}
	public function eliminar(){

	}
	public function notificar(){

	}
	public function setEstado(){
		
	}
	public function getEstado(){
		
	}

	//Getter y setters de atributos.
	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
	public function setFecha($fecha){
		$this->fecha = $fecha;
	}
	public function getFecha(){
		return $this->fecha;
	}
	public function setTotal($total){
		$this->total = $total;
	}
	public function getTotal(){
		return $this->total;
	}
	public function setCantidad($cantidad){
		$this->cantidad = $cantidad;
	}
	public function getCantidad(){
		return $this->cantidad;
	}
	public function setEstado($estado){
		$this->estado = $estado;
	}
	public function getEstado(){
		return $this->estado;
	}
}
?>