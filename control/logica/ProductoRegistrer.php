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
	public function __construct($idTipoProducto,$nombreProducto,$precioProducto,$cantidadProducto,$fotoProducto){
		$this->idTipoProducto = $idTipoProducto;
		$this->nombreProducto = $nombreProducto;
		$this->precioProducto = $precioProducto;
		$this->cantidadProducto = $cantidadProducto;
		$this->fotoProducto = $fotoProducto;
		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->validarRegistro();
	}

	//Conexion a la base de datos.
	public function conectarBD(){
		$conn = new \PDO('mysql:host=localhost;dbname=popashop','root','');
        return $conn;
	}

	//Validar datos enviados del formulario con los de la base de datos.
	public function validarRegistro(){

		//if(isset($this->tipoDocumento) && isset($this->numeroDocumento) && isset($this->nombre) && isset($this->apellido) && isset($this->correo) && isset($this->telefono) && isset($this->direccion)){
			$tabla = "persona";
			$conn = new \PDO('mysql:host=localhost;dbname=popashop','root','');
			$stmt = $conn->prepare("INSERT INTO $tabla(
				idProducto,
				idTipoProducto,
				nombreProducto,
				precioProducto,
				cantidadProducto,
				fotoProducto) VALUES(NULL,:item1,:item2,:item3,:item4,'NULL')");

			$stmt->bindParam(":item1", $this->idTipoProducto, \PDO::PARAM_INT);
			$stmt->bindParam(":item2", $this->nombreProducto, \PDO::PARAM_INT);
			$stmt->bindParam(":item3", $this->precioProducto, \PDO::PARAM_STR);
			$stmt->bindParam(":item4", $this->cantidadProducto, \PDO::PARAM_STR);
			$stmt->bindParam(":item5", $this->fotoProducto, \PDO::PARAM_INT);
			
			$stmt->execute();
			if ($stmt) {
				$d = "error";
				return $d;
			}else{
				$d = "error";
				return $d;
			}
			
		//}
	}
}
?>