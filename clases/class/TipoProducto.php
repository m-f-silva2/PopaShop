<?php  namespace clase;
/*
 *clase TipoProducto.
**/
class TipoProducto{
	//Atributos
    private $idTipoProducto;
	private $descripcionProducto;

	public function __construct(){
         
	}
}

function getIdTipoProducto() {
    return $this->idTipoProducto;
}

 function getDescripcionProducto() {
    return $this->descripcionProducto;
}

 function setIdTipoProducto($idTipoProducto) {
    $this->idTipoProducto = $idTipoProducto;
}

 function setDescripcionProducto($descripcionProducto) {
    $this->descripcionProducto = $descripcionProducto;
}





?>