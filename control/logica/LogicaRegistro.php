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
	public function __construct($tipoDocumento,$numeroDocumento,$nombre,$apellido,$correo,$telefono,$direccion){
		$this->tipoDocumento = $tipoDocumento;
		$this->numeroDocumento = $numeroDocumento;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->correo = $correo;
		$this->telefono = $telefono;
		$this->direccion = $direccion;
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