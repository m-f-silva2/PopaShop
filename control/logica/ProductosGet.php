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

	//Validar datos enviados del formulario con los de la base de datos.
	public function mostrarProductos(){

			$tabla = "producto";
			require_once "conexion.php";
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt->execute();
			if ($stmt) {
				while ($filas = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            		$productos[] = $filas;
        		}
				return $productos;
			}else{
				$d = "error";
				return $d;
			}
	}
}
?>