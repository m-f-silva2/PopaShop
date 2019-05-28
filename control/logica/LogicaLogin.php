<?php  namespace Logica;
/**
 *Login
**/

class Login{

	private $usuario;
	private $password;
	private $tabla = 'usuario';

	public function __construct($usuario,$password){

		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->validarLogin($usuario,$password);
	}

	//Validar datos enviados del formulario.
	public function validarLogin($usuario,$password){
		if($usuario != null && $password != null){
				$respuesta = LoginUsuario::validarUsuario($usuario,$password);
				//$respuesta = \ModeloLogin::mdlValidarUsuario($tabla, $usuario,$password);
				//print_r($respuesta);
				//var_dump($respuesta);
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
}

class LoginBd{
	//Conexion a la base de datos.
	public function conectarBD(){
		$conn = new \PDO('mysql:host=localhost;dbname=popashop','root','');
        return $conn;
	}
}
class LoginUsuario{
	private $usuario;
	private $password;
	private $tabla;

	//Validar datos enviados del formulario con los de la base de datos.
	public function validarUsuario($usuario2,$password2){

		if(isset($usuario2) && isset($password2)){
			$tabla = "usuario";
			$conn = new \PDO('mysql:host=localhost;dbname=popashop','root','');
			$stmt = $conn->prepare("SELECT idRol FROM $tabla WHERE login = :item AND password = :item2");
			//$stmt->bindParam(":tabla", $tabla, \PDO::PARAM_STR);
			$stmt->bindParam(":item", $usuario2, \PDO::PARAM_STR);
			$stmt->bindParam(":item2", $password2, \PDO::PARAM_STR);
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