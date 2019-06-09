<?php  namespace Clase;
/*
 *Clase Administrador.
**/
include "clases/class/Usuario.php";
class Administrador extends Usuario{
	//Atributos
	private $v_classVendedor;
	private $v_classPersona;
	private $v_classUsuario;
	private $v_nombre;
	private $v_apellido;
	private $v_imagen;
	private $datos;

	//Metodos
	//Constructor
	public function __construct($datos,$metodo){
		if (isset($datos) && isset($metodo)) {
			$this->datos = $datos;
			//Validar registro de Persona.
			switch ($metodo) {
				case 'agregarVendedor':
					$this->v_imagen = $_FILES['regImgArchivo'];
					$this->agregarVendedor();
					break;
				case 'editarVendedor':
					$this->v_imagen = $_FILES['regImgArchivo'];
					$this->editarVendedor();
					break;
				case 'eliminarVendedor':
					$this->eliminarVendedor();
					break;
				case 'mostrarVendedores':
					$this->mostrarVendedores();
					break;
				case 'getVendedor':
					$this->getVendedor($this->datos);
					break;
			}
		}
	}
	public function agregarVendedor(){
		//require_once "clases/class/Vendedor.php";
		$this->v_classPersona = new \Clase\Persona();
		$this->v_classUsuario = new \Clase\Usuario();

		//Se envian los valores de identificacion a la clase persona y esta a su vez a la clase identificacion.
		$this->v_classPersona->setIdentificacion($this->datos["tipoDocumento"],$this->datos["numeroDocumento"]);
		$this->v_classPersona->setNombre1($this->datos["nombre1"]);
		if (isset($datos["nombre2"]) && $this->datos["nombre2"] != null) {
			$this->v_classPersona->setNombre2($this->datos["nombre2"]);
		}
		$this->v_classPersona->setApellido1($this->datos["apellido1"]);
		$this->v_classPersona->setApellido2($this->datos["apellido2"]);
		$this->v_classUsuario->setCorreo($this->datos["correo"]);
		$this->v_classUsuario->setTelefono($this->datos["telefono"]);
		$this->v_classUsuario->setDireccion($this->datos["direccion"]);
		$this->v_classUsuario->setNombre($this->datos["usuario"]);
		$this->v_classUsuario->setPassword($this->datos["contrasena"]);
		//-------------------------------------------

		//Cargar valores(getter).
		if(($this->v_classPersona->getNombre2()) != null){
			$this->v_nombre = ($this->v_classPersona->getNombre1()).' '.($this->v_classPersona->getNombre2());
		}else{
			$this->v_nombre = $this->v_classPersona->getNombre1();
		}
		$this->v_apellido = ($this->v_classPersona->getApellido1()).' '.($this->v_classPersona->getApellido2());
		$correo = $this->v_classUsuario->getCorreo();
		$telefono = $this->v_classUsuario->getTelefono();
		$direccion = $this->v_classUsuario->getDireccion();
		//-------------------------------------------

		//Validar imagen.
		

		if($this->v_imagen > 0){
		    //echo "no viene una imagen";
		    $nombre_file = 'monigote.png';
		}else{
		    $titulo = "avatar-";
		    $titulo = $titulo.$this->v_classUsuario->getNombre();
		    $nombre_file = $titulo .'.jpg';
		}
		
		//-------------------------------------------

		//Sentencias SQL.
		require_once "control/logica/conexion.php";
			$tabla = "persona";
			$stmt = \Logica\Conexion::conectar()->prepare("INSERT INTO $tabla(
				idPersona,
				idTipoDocumento,
				documentoPersona,
				nombrePersona,
				apellidoPersona,
				correoPersona,
				telefonoPersona,
				avatarPersona,
				direccionPersona) VALUES(NULL,:item1,:item2,:item3,:item4,:item5,:item6,'NULL',:item7)");

			$stmt->bindParam(":item1", ($this->v_classPersona->getIdentificacion()['tipo']), \PDO::PARAM_INT);
			$stmt->bindParam(":item2", ($this->v_classPersona->getIdentificacion()['numero']), \PDO::PARAM_INT);
			$stmt->bindParam(":item3", $this->v_nombre, \PDO::PARAM_STR);
			$stmt->bindParam(":item4", $this->v_apellido, \PDO::PARAM_STR);

			$stmt->bindParam(":item5", $correo, \PDO::PARAM_STR);
			$stmt->bindParam(":item6", $telefono, \PDO::PARAM_INT);
			$stmt->bindParam(":item7", $direccion, \PDO::PARAM_STR);
			$stmt->execute();
			if ($stmt) {
			//Agregar Usuario.
				$tabla2 = "usuario";
				$stmt2 = \Logica\Conexion::conectar()->prepare("INSERT INTO $tabla2 (
				idUsuario, 
				login,
                password,
                idRol,
                idPersona) values(NULL,:item1,:item2,2,(select idPersona from persona where documentoPersona = :item3))");
                @$stmt2->bindParam(":item1", $this->v_classUsuario->getNombre(), \PDO::PARAM_STR);
                @$stmt2->bindParam(":item2", $this->v_classUsuario->getPassword(), \PDO::PARAM_STR);
                $stmt2->bindParam(":item3", ($this->v_classPersona->getIdentificacion()['numero']), \PDO::PARAM_INT);
                $stmt2->execute();

            //Agregar imagen a la carpeta src/assets/monigotes/
			    $tituloArchivo = utf8_decode($titulo);
			    $nombre_file = $tituloArchivo.'.jpg';
			    $imagen = $this->v_imagen["error"];
			    //Si $imagen es igual a 0 no tiene errores y se puede subir la imagen.
				if($imagen == 0){
				    $origen = $this->v_imagen["tmp_name"];
				    $destino = "src/assets/monigotes/$nombre_file";
				    move_uploaded_file ($origen, $destino);
				}
            }
	}

	public function editarVendedor(){
		$this->v_classPersona = new \Clase\Persona();
		$this->v_classUsuario = new \Clase\Usuario();

		//Se envian los valores de identificacion a la clase persona y esta a su vez a la clase identificacion.
		$this->v_classPersona->setIdentificacion($this->datos["tipoDocumento"],$this->datos["numeroDocumento"]);
		$this->v_classUsuario->setCorreo($this->datos["correo"]);
		$this->v_classUsuario->setTelefono($this->datos["telefono"]);
		$this->v_classUsuario->setDireccion($this->datos["direccion"]);
		$this->v_classUsuario->setNombre($this->datos["usuario"]);
		$this->v_classUsuario->setPassword($this->datos["contrasena"]);
		//-------------------------------------------

		//Cargar valores(getter).
		$this->v_nombre = $this->datos["nombre"];
		$this->v_apellido = $this->datos["apellido"];
		$correo = $this->v_classUsuario->getCorreo();
		$telefono = $this->v_classUsuario->getTelefono();
		$direccion = $this->v_classUsuario->getDireccion();
		//-------------------------------------------

		//Validar imagen.
		$imagen = $this->v_imagen["error"];

		if($imagen > 0){
		    $nombre_file = 'monigote.png';
		}else{
		    $titulo = "avatar-";
		    $titulo = $titulo.$this->v_classUsuario->getNombre();
		    $titulo = utf8_decode($titulo);
		    $nombre_file = $titulo .'.jpg';
		}
		
		//-------------------------------------------

		//Sentencias SQL.
		require_once "control/logica/conexion.php";
			$tabla = "persona";
			$stmt = \Logica\Conexion::conectar()->prepare("UPDATE $tabla SET
				idTipoDocumento = :item1,
				documentoPersona = :item2,
				nombrePersona = :item3,
				apellidoPersona = :item4,
				correoPersona = :item5,
				telefonoPersona = :item6,
				avatarPersona = :item7,
				direccionPersona = :item8 
				WHERE documentoPersona = :item2");

			$stmt->bindParam(":item1", ($this->v_classPersona->getIdentificacion()['tipo']), \PDO::PARAM_INT);
			$stmt->bindParam(":item2", ($this->v_classPersona->getIdentificacion()['numero']), \PDO::PARAM_INT);
			$stmt->bindParam(":item3", $this->v_nombre, \PDO::PARAM_STR);
			$stmt->bindParam(":item4", $this->v_apellido, \PDO::PARAM_STR);

			$stmt->bindParam(":item5", $correo, \PDO::PARAM_STR);
			$stmt->bindParam(":item6", $telefono, \PDO::PARAM_INT);
			$stmt->bindParam(":item7", $nombre_file, \PDO::PARAM_STR);
			$stmt->bindParam(":item8", $direccion, \PDO::PARAM_STR);
			$stmt->execute();
			if ($stmt) {
			//Agregar Usuario.
				$tabla2 = "usuario";
				$pass = $this->v_classUsuario->getPassword();
				if ($pass != null) {
					$stmt2 = \Logica\Conexion::conectar()->prepare("UPDATE $tabla2 SET
					login = :item1,
	                password = :item2");
	                @$stmt2->bindParam(":item1", $this->v_classUsuario->getNombre(), \PDO::PARAM_STR);
                	@$stmt2->bindParam(":item2", $this->v_classUsuario->getPassword(), \PDO::PARAM_STR);
				}else{
					$stmt2 = \Logica\Conexion::conectar()->prepare("UPDATE $tabla2 SET
					login = :item1");
					@$stmt2->bindParam(":item1", $this->v_classUsuario->getNombre(), \PDO::PARAM_STR);
				}
                $stmt2->execute();

            //Agregar imagen a la carpeta src/assets/monigotes/
			    $imagen = $this->v_imagen["error"];
			    //Si $imagen es igual a 0 no tiene errores y se puede subir la imagen.
				if($imagen == 0){
				    $origen = $this->v_imagen["tmp_name"];
				    $destino = "src/assets/monigotes/$nombre_file";
				    move_uploaded_file ($origen, $destino);
				}
				header("Location: http://localhost/PopaShop/administrarVendedores");
            }
	}

	public function eliminarVendedor(){
		
	}
	public function mostrarVendedores(){
            $tabla = "persona";
            $tabla2= "usuario";
			require_once "control/logica/conexion.php";
			$stmt = \Logica\Conexion::conectar()->prepare("SELECT * FROM $tabla p inner join $tabla2 u on p.idPersona=u.idPersona  WHERE u.idRol=2");
			$stmt->execute();
			if ($stmt) {
				while ($filas = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            		$vendedores[] = $filas;
        		}
				return $vendedores;
			}else{
				$d = "error";
				return $d;
			}
    }
    
    public function getVendedor($v_idVendedor){
            $tabla = "persona";
            $tabla2= "usuario";
            $tabla3= "tipodocumento";
			require_once "control/logica/conexion.php";
			$stmt = \Logica\Conexion::conectar()->prepare("
				SELECT  
				p.idPersona,
				p.idTipoDocumento,
				t.tipoDeDocumento,
				p.documentoPersona,
				p.nombrePersona,
				p.apellidoPersona,
				p.correoPersona,
				p.telefonoPersona,
				p.avatarPersona,
				p.direccionPersona,
				u.login
				FROM $tabla p inner join $tabla2 u on p.idPersona=u.idPersona inner join $tabla3 t on t.idTipoDocumento=p.idTipoDocumento  WHERE p.idPersona=:item1");
			$stmt->bindParam(":item1", $v_idVendedor, \PDO::PARAM_INT);
			$stmt->execute();
			if ($stmt) {
				while ($filas = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            		$vendedores[] = $filas;
        		}
				return $vendedores;
			}else{
				$d = "error";
				return $d;
			}
    }
}
?>