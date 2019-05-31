<?php  namespace Logica;
/**
 *Login
**/

class Registro{

	private $tipoDocumento;
	private $numeroDocumento;
	private $nombre;
	private $apellido;
	private $correo;
	private $telefono;
	private $direccion;
	
	private $usuario;
    private $contraseña;

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($datos){
		if (isset($datos)) {

		$this->tipoDocumento = $datos["tipoDocumento"];
		$this->numeroDocumento = $datos["numeroDocumento"];
		$this->nombre = $datos["nombre"];
		$this->apellido = $datos["apellido"];
		$this->correo = $datos["correo"];
		$this->telefono = $datos["telefono"];
		$this->direccion = $datos["direccion"];

		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->validarRegistro();
		}
	}

	//Validar datos enviados del formulario con los de la base de datos.
	public function validarRegistro(){

		require_once "conexion.php";
			$tabla = "persona";
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(
				idPersona,
				idTipoDocumento,
				documentoPersona,
				nombrePersona,
				apellidoPersona,
				correoPersona,
				telefonoPersona,
				avatarPersona,
				direccionPersona) VALUES(NULL,:item1,:item2,:item3,:item4,:item5,:item6,'NULL',:item7)");

			$stmt->bindParam(":item1", $this->tipoDocumento, \PDO::PARAM_INT);
			$stmt->bindParam(":item2", $this->numeroDocumento, \PDO::PARAM_INT);
			$stmt->bindParam(":item3", $this->nombre, \PDO::PARAM_STR);
			$stmt->bindParam(":item4", $this->apellido, \PDO::PARAM_STR);
			$stmt->bindParam(":item5", $this->correo, \PDO::PARAM_STR);
			$stmt->bindParam(":item6", $this->telefono, \PDO::PARAM_INT);
			$stmt->bindParam(":item7", $this->direccion, \PDO::PARAM_STR);
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