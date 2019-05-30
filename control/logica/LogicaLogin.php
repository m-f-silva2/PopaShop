<?php  namespace Logica;
/**
 *Login
**/


class Login{

	private $usuario;
	private $password;

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($usuario,$password){
		$this->usuario = $usuario;
		$this->password = $password;
		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->validarLogin();
	}

	//Validar datos enviados del formulario.
	public function validarLogin(){
		if($this->usuario != null && $this->password != null){
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

		if(isset($this->usuario) && isset($this->password)){
			require_once "conexion.php";
			$tabla = "usuario";
			$stmt = Conexion::conectar()->prepare("SELECT idRol FROM $tabla WHERE login = :item AND password = :item2");

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