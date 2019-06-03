<?php  namespace clase;
/*
 *clase Factura.
**/
class Factura{
	//Atributos
	private $producto;
	private $cliente;
	private $pedido;

	//Getter y setter
	public function setProducto($producto){
		$this->producto = $producto;
	}
	public function getProducto(){
		return $this->producto;
	}
	public function setCliente($cliente){
		$this->cliente = $cliente;
	}
	public function getCliente(){
		return $this->cliente;
	}
	public function setPedido($pedido){
		$this->pedido = $pedido;
	}
	public function getPedido(){
		return $this->pedido;
	}
}
?>