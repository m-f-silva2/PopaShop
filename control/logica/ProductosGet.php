<?php  namespace Logica;
/**
 *Login
**/

class ProductosGet{

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct(){
		
		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->validarProductos();
	}

	//Conexion a la base de datos.
	public function conectarBD(){
		$conn = new \PDO('mysql:host=localhost;dbname=popashop','root','');
        return $conn;
	}

	


	//Validar datos enviados del formulario con los de la base de datos.
	public function validarProductos(){

		
			$tabla = "productos";
			$conn = new \PDO('mysql:host=localhost;dbname=popashop','root','');
			$stmt = $conn->prepare("SELECT * FROM $tabla");

			$stmt->execute();
			if ($stmt) {
				return $stmt->fetch();
			}else{
				$d = "error";
				return $d;
			}
                     

                        $datos=array();

                        while($row = mysqli_fetch_array($smt,MYSQLI_ASSOC)){
                            $datos[]=$row;                   
                        }//}  
                        echo json_encode($datos); // aqui se guardan todos los productos en JSON);
	
		
	}
}
?>