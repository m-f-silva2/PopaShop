<?php  namespace Logica;
/**
 *Login
**/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class RegistrarVendedor{

	private $tipoDocumento;
	private $numeroDocumento;
	private $nombre;
	private $apellido;
	private $correo;
	private $telefono;
	private $direccion;
	
        private $idPersona;
	private $usuario;
    private $contrasena;

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
        $this->usuario = $datos["usuario"];
        $this->contrasena = $datos["contrasena"];

		//Aqui si se puede acceder a esta funcion de tipo private.
        $this->validarRegistro();
        $this->registrarUsuario();
		}
	}
public function registrarUsuario(){
   // $this->traerIdPersona();
    
    require_once "conexion.php";
    $tabla = "usuario";
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (idUsuario, login,
                                                                        password,
                                                                        idRol,
                                                                        idPersona) values(NULL,:item8,:item9,3,5) ");
                                                                        $stmt->bindParam(":item8", $this->usuario, \PDO::PARAM_STR);
                                                                        $stmt->bindParam(":item9", $this->contrasena, \PDO::PARAM_STR);
                                                                        //$stmt->bindParam(":item10", $this->idRol, \PDO::PARAM_STR);
                                                                        //$stmt->bindParam(":item4", $this->idPersona, \PDO::PARAM_STR);
                                                                        
                                                                        $stmt->execute();
                                                                        
			if ($stmt) {
				$d = true;
				return $d;
			}else{
				$d = false;
				return $d;
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
        public function traerIdPersona(){
            require_once "conexion.php";
			$tabla = "persona";
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE numeroDocumento=':item10'");
            $stmt->bindParam(":item10", $this->numeroDocumento, \PDO::PARAM_INT);
			if ($stmt) {
				while ($filas = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            		$idPersonas[] = $filas;
        		}
				return $productos;
			}else{
				$d = "error";
				return $d;
			}
                      
        }
}
?>