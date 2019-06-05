<?php  namespace Logica;
/**
 *Login
**/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Registro{
	//Atributos
	private $v_usuario;
	private $v_persona;
	private $v_idPersona;
	private $v_cliente;
	private $v_nombre;
	private $v_apellido;

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($datos){

		if (isset($datos)) {
			require_once "clases/class/Cliente.php";
			$this->v_cliente = new \Clase\Cliente();
			$this->v_persona = new \Clase\Persona();
			$this->v_usuario = new \Clase\Usuario();

			//Se envian los valores de identificacion a la clase persona y esta a su vez a la clase identificacion.
			$this->v_persona->setIdentificacion($datos["tipoDocumento"],$datos["numeroDocumento"]);
			$this->v_persona->setNombre1($datos["nombre1"]);
			if (isset($datos["nombre2"]) && $datos["nombre2"] != null) {
				$this->v_persona->setNombre2($datos["nombre2"]);
			}
			$this->v_persona->setApellido1($datos["apellido1"]);
			$this->v_persona->setApellido2($datos["apellido2"]);
			$this->v_usuario->setCorreo($datos["correo"]);
			$this->v_usuario->setTelefono($datos["telefono"]);
			$this->v_usuario->setDireccion($datos["direccion"]);
			$this->v_usuario->setNombre($datos["usuario"]);
			$this->v_usuario->setPassword($datos["contrasena"]);

			//Aqui si se puede acceder a esta funcion de tipo private.
	        $this->validarRegistro();
	        $idPersona = $this->traerIdPersona();
	        $this->v_idPersona = $idPersona['idPersona'];        	
	        
	        if($this->v_idPersona != null){
	        	$this->registrarUsuario();
			}
		}

	}
public function registrarUsuario(){
    //
    $nombre = $this->v_usuario->getNombre();
    $pass = $this->v_usuario->getPassword();

    require_once "conexion.php";
    $tabla = "usuario";
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (
				idUsuario, 
				login,
                password,
                idRol,
                idPersona) values(NULL,:item1,:item2,2,:item3) ");
                $stmt->bindParam(":item1", $nombre, \PDO::PARAM_STR);
                $stmt->bindParam(":item2", $pass, \PDO::PARAM_STR);
                $stmt->bindParam(":item3", $this->v_idPersona, \PDO::PARAM_INT);
                $stmt->execute();

			if ($stmt) {
				$d = true;
				return $d;
				$stmt->close();
			}else{
				$d = false;
				return $d;
			}

}
	//Validar datos enviados del formulario con los de la base de datos.
	public function validarRegistro(){
		if(($this->v_persona->getNombre2()) != null){
			$this->v_nombre = ($this->v_persona->getNombre1()).' '.($this->v_persona->getNombre2());
		}else{
			$this->v_nombre = $this->v_persona->getNombre1();
		}
		$this->v_apellido = ($this->v_persona->getApellido1()).' '.($this->v_persona->getApellido2());
		$correo = $this->v_usuario->getCorreo();
		$telefono = $this->v_usuario->getTelefono();
		$direccion = $this->v_usuario->getDireccion();
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

			$stmt->bindParam(":item1", ($this->v_persona->getIdentificacion()['tipo']), \PDO::PARAM_INT);
			$stmt->bindParam(":item2", ($this->v_persona->getIdentificacion()['numero']), \PDO::PARAM_INT);
			$stmt->bindParam(":item3", $this->v_nombre, \PDO::PARAM_STR);
			$stmt->bindParam(":item4", $this->v_apellido, \PDO::PARAM_STR);

			$stmt->bindParam(":item5", $correo, \PDO::PARAM_STR);
			$stmt->bindParam(":item6", $telefono, \PDO::PARAM_INT);
			$stmt->bindParam(":item7", $direccion, \PDO::PARAM_STR);
			$stmt->execute();
			if ($stmt) {
				$d = true;
				return $d;
				$stmt->close();
			}else{
				$d = false;
				return $d;
			}
	}
        public function traerIdPersona(){
            require_once "conexion.php";
			$tabla = "persona";
            $stmt = Conexion::conectar()->prepare("SELECT idPersona FROM $tabla WHERE documentoPersona = :item1");
            $stmt->bindParam(":item1", ($this->v_persona->getIdentificacion()['numero']), \PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
        }
}
?>