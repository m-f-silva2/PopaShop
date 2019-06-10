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
	public function getIdProducto() {
            return $this->idProducto;
        }

        public function getIdTipoProducto() {
            return $this->idTipoProducto;
        }

        public function getNombreProducto() {
            return $this->nombreProducto;
        }

        public function getPrecioProducto() {
            return $this->precioProducto;
        }

        public function getCantidadProducto() {
            return $this->cantidadProducto;
        }

        public function getFotoProducto() {
            return $this->fotoProducto;
        }

        public function setIdProducto($idProducto) {
            $this->idProducto = $idProducto;
        }

        public function setIdTipoProducto($idTipoProducto) {
            $this->idTipoProducto = $idTipoProducto;
        }

        public function setNombreProducto($nombreProducto) {
            $this->nombreProducto = $nombreProducto;
        }

        public function setPrecioProducto($precioProducto) {
            $this->precioProducto = $precioProducto;
        }

        public function setCantidadProducto($cantidadProducto) {
            $this->cantidadProducto = $cantidadProducto;
        }

        public function setFotoProducto($fotoProducto) {
            $this->fotoProducto = $fotoProducto;
        }


}
?>