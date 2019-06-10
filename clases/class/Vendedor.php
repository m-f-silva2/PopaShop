<?php  namespace clase;
/*
 *Clase Vendedor.
**/
include "clases/abstract/Persona.php";
class Vendedor extends Persona implements \SplObserver{

	//Metodos
	//Constructor
	public function __construct(){

	}
	public function agregarProducto(){

	}
	public function editarProducto(){

	}
	public function eliminarProducto(){
		
	}
	public function enviarProducto(){
		
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