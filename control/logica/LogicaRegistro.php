<?php  namespace Logica;
/**
 *Login
**/

class Registro{

	private $usuario;
	private $password;
        private $idPersona;
        private $idTipoDocumento;
        private $documentoPersona;
        private $nombrePersona;
        private $apellidoPersona;
        private $correoPersona;
        private $telefonoPersona;
        private $avatarPersona;
        private $direccionPersona;

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($idPersona,$idTipoDocumento,$documentoPersona,$nombrePersona,$apellidoPersona,$correoPersona,$telefonoPersona,
                $avatarPersona,$direccionPersona){
		$this->idPersona = $idPersona;
		$this->idTipoDocumento = $idTipoDocumento;
                $this->documentoPersona = $documentoPersona;
                $this->nombrePersona = $nombrePersona;
                $this->apellidoPersona = $apellidoPersona;
                $this->correoPersona = $correoPersona;
                $this->telefonoPersona = $telefonoPersona;
                $this->avatarPersona = $avatarPersona;
                $this->direccionPersona = $direccionPersona;
                
                
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

		if(isset($this->usuario) && isset($this->password)){
			$tabla = "persona";
			$conn = new \PDO('mysql:host=localhost;dbname=popashop','root','');
			$stmt = $conn->prepare("INSERT INTO $tabla (idPersona,"
                                . "idTipoDocumento,"
                                . "documentoPersona,"
                                . "nombrePersona,"
                                . "apellidoPersona,"
                                . "correoPersona,"
                                . "telefonoPersona,"
                                . "avatarPersona,"
                                . "direccionPersona) "
                                . "values()");

			$stmt->bindParam(":item", $this->usuario, \PDO::PARAM_STR);
			$stmt->bindParam(":item2", $this->password, \PDO::PARAM_STR);
			$stmt->execute();
			if ($stmt) {
				return $stmt->fetch();
			}else{
				$d = "error";
				return $d;
			}
			
		}
	}
}
?>