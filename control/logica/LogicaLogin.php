<?php  namespace Logica;
/**
 *Login
**/


class Login{
	//Atributos
	private $objUsuario;

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($usuario,$password){

		//Metodos de Usuario
		//$s = $arrayName = array('' => , );
		require_once "clases/class/Usuario.php";
		$v_usuario = new \Clase\Usuario();
		$v_usuario->setPassword($password);
		$v_usuario->setNombre($usuario);
		$this->objUsuario = array('usuario' => ($v_usuario->getNombre()),'password' => ($v_usuario->getPassword()));

		//print_r($this->objUsuario);
		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->validarLogin();
	}

	//Validar datos enviados del formulario.
	public function validarLogin(){
		if($this->objUsuario['usuario'] != null && $this->objUsuario['password'] != null){
				$respuesta = $this->validarUsuario();
    			switch ($respuesta["idRol"]) {
	        		case 1:
            			$_SESSION["rol"] = "Administrador";
            			echo "<script>window.location.replace('inicio-admin');</script>";
            			break;
        			case 2:
            			$_SESSION["rol"] = "Cliente";
            			echo "<script>window.location.replace('inicio-cliente');</script>";
            			break;
        			case 3:
            			$_SESSION["rol"] = "Vendedor";
            			echo "<script>window.location.replace('inicio-vendedor');</script>";
            			break;
    			}
                       
                        
                        
		}
	}


	//Validar datos enviados del formulario con los de la base de datos.
	public function validarUsuario(){
                        if(isset($this->objUsuario['usuario']) && isset($this->objUsuario['password'])){
			require_once "conexion.php";
			$tabla = "persona";
                        $tabla2= "usuario";
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla p inner join $tabla2 u on u.idPersona = p.idPersona WHERE login = :item AND password = :item2");

			$stmt->bindParam(":item", $this->objUsuario['usuario'], \PDO::PARAM_STR);
			$stmt->bindParam(":item2", $this->objUsuario['password'], \PDO::PARAM_STR);
			$stmt->execute();
			if ($stmt) {
				return $stmt->fetch();
			}else{
				$d = "error";
				return $d;
			}
			
		}
	}
        public function traerDatosPorUsuario(){
            $tabla = "persona";
            $tabla2= "usuario";
			require_once "conexion.php";
                       
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla p inner join $tabla2 u on u.idPersona = p.idPersona where u.idPersona=1");
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