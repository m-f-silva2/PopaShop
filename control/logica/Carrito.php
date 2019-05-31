<?php  namespace Logica;
/**
 *Login
**/

class Carrito{	

    
    private $idProducto;
    private $productos;
	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct(){
		$this->idProducto = $idProducto;
		$this->productos = $productos;
		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->addCarrito();
	}

	//Validar datos enviados del formulario con los de la base de datos.
	public function addCarrito(){

            if($this->idProducto != null && $this->productos != null){
                $_SESSION["productos"]["{$_REQUEST["idProducto"]}"] = json_encode($rP->data);
                
                
                
            }		
	}
        private function validateSession() {
        if (!isset($_SESSION["productos"])) {
            $_SESSION["productos"] = [];
        }
    }
}
?>