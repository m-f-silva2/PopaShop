<?php  namespace Clase;
/*
 *Clase Cliente.
**/
include "clases/class/Usuario.php";
class Cliente extends Usuario implements \SplObserver{

	//Metodos
	//Constructor
	public function __construct(){

	}
	public function gestionarPedido(){

	}
	public function buscarProducto(){

	}
	public function gestionarPerfil(){
		
	}
	public function registrarCliente(){
		
	}
	//Actualizar.
	public function update(\SplSubject $subject)
    {
        echo 'Estado del pedido: '; 
        switch ($subject->getEstado()) {
        	case 1:
        		echo "Pendiente...". PHP_EOL;
        		break;        	
        	case 2:
        		echo "Enviado...". PHP_EOL;
        		break;
        }
    }
}
?>