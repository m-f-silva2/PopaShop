<?php  namespace Logica;


class PerfilLogica{
   private $Class_Usuario;
    //Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($datos){
             include_once  'clases/class/Usuario.php';
             $this->Class_Usuario= new \Clase\Usuario();
               $this->Class_Usuario->setIdUsuario($_SESSION["idUsuario"]);
               $this->getDato();
    }
    public function getDato() {
        $tabla = "usuario";
        $tabla2= "persona";
			require_once "conexion.php";
                        
			//$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla u inner join $tabla2 p on u.idPersona=p.idPersona where u.idUsuario=:item");
                        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla u inner join $tabla2 p on u.idPersona=p.idPersona where u.idUsuario=1 ");
                        $stmt->bindParam(":item", ($this->Class_Usuario->getIdUsuario()), \PDO::PARAM_STR);
			$stmt->execute();
			
                        
			if ($stmt) {
				while ($filas = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            		$informacion[] = $filas;
        		}
				return $informacion;
			}else{
				$d = "error";
				return $d;
			}
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
