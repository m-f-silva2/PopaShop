<?php  namespace clase;
/*
 *Clase Producto.
**/

class Producto{
	//Atributos
	private $idProducto;
	private $idTipoProducto;
	private $nombreProducto;
	private $precioProducto;
        private $cantidadProducto;
	private $fotoProducto;
	


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
	function getIdProducto() {
            return $this->idProducto;
        }

        function getIdTipoProducto() {
            return $this->idTipoProducto;
        }

        function getNombreProducto() {
            return $this->nombreProducto;
        }

        function getPrecioProducto() {
            return $this->precioProducto;
        }

        function getCantidadProducto() {
            return $this->cantidadProducto;
        }

        function getFotoProducto() {
            return $this->fotoProducto;
        }

        function setIdProducto($idProducto) {
            $this->idProducto = $idProducto;
        }

        function setIdTipoProducto($idTipoProducto) {
            $this->idTipoProducto = $idTipoProducto;
        }

        function setNombreProducto($nombreProducto) {
            $this->nombreProducto = $nombreProducto;
        }

        function setPrecioProducto($precioProducto) {
            $this->precioProducto = $precioProducto;
        }

        function setCantidadProducto($cantidadProducto) {
            $this->cantidadProducto = $cantidadProducto;
        }

        function setFotoProducto($fotoProducto) {
            $this->fotoProducto = $fotoProducto;
        }


}
?>