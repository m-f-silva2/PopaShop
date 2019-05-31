<?php  namespace Logica;
/**
 *Login
**/

class RegistroProducto{

	private $idTipoProducto;
	private $nombreProducto;
	private $precioProducto;
	private $cantidadProducto;
	private $fotoProducto;
	

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($datos){
	
		$this->nombreProducto = $datos["nombreProducto"];
		$this->idTipoProducto = $datos["tipoProducto"];
		$this->precioProducto = $datos["precioProducto"];
		$this->cantidadProducto = $datos["cantidadProducto"];
		$this->fotoProducto = $datos["fotoProducto"];
		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->validarRegistro();
	}

	//Validar datos enviados del formulario con los de la base de datos.
	public function validarRegistro(){
			
			require_once "conexion.php";
			$tabla = "producto";
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(
				idProducto,
				idTipoProducto,
				nombreProducto,
				precioProducto,
				cantidadProducto,
				fotoProducto) VALUES(NULL,:item1,:item2,:item3,:item4,'NULL')");

			$stmt->bindParam(":item1", $this->idTipoProducto, \PDO::PARAM_INT);
			$stmt->bindParam(":item2", $this->nombreProducto, \PDO::PARAM_STR);
			$stmt->bindParam(":item3", $this->precioProducto, \PDO::PARAM_INT);
			$stmt->bindParam(":item4", $this->cantidadProducto, \PDO::PARAM_INT);
			//$stmt->bindParam(":item5", $this->fotoProducto, \PDO::PARAM_INT);
			
			$stmt->execute();
			if ($stmt) {
				$d = true;
				return $d;
			}else{
				$d = false;
				return $d;
			}
	}
}
?>