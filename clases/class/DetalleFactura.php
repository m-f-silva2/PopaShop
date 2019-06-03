<?php  namespace clase;
/*
 *clase DetalleFactura.
**/
class DetalleFactura{
	//Atributos
	private $nombreTienda;
	private $descripcion;
	private $iva;
	private $total;
	private $subtotal;
	private $fecha;

	//Metodos
	public function calcularTotal(){

	}
	public function calcularSubTotal(){
		
	}

	//Getter y setter
	public function setNombreTienda($nombreTienda){
		$this->nombreTienda = $nombreTienda;
	}
	public function getNombreTienda(){
		return $this->nombreTienda;
	}
	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	public function getDescripcion(){
		return $this->descripcion;
	}
	public function setIva($iva){
		$this->iva = $iva;
	}
	public function getIva(){
		return $this->iva;
	}
	public function setTotal($total){
		$this->total = $total;
	}
	public function getTotal(){
		return $this->total;
	}
	public function setSubtotal($subtotal){
		$this->subtotal = $subtotal;
	}
	public function getSubtotal(){
		return $this->subtotal;
	}
	public function setFecha($fecha){
		$this->fecha = $fecha;
	}
	public function getFecha(){
		return $this->fecha;
	}
}
?>