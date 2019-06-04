<?php namespace Logica;
class CompraLogica{
    //Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct(){
		
		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->registrarUsuario();
	}
  
    
    public function registrarUsuario(){
 
    
    require_once "conexion.php";
    $tabla = "factura";
    
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (idFactura, ClienteIdUsuario,
                                                                        usuarioIdUsuario,
                                                                        fechaFactura,
                                                                        totalFactura,
                                                                        idCiudad) values(NULL,NULL,4,'2019-04-08',9600,1) ");
                                                                        //$stmt->bindParam(":item8", $this->usuario, \PDO::PARAM_STR);
                                                                        //$stmt->bindParam(":item9", $this->contrasena, \PDO::PARAM_STR);
                                                                        //$stmt->bindParam(":item10", $this->idRol, \PDO::PARAM_STR);
                                                                        //$stmt->bindParam(":item4", $this->idPersona, \PDO::PARAM_STR);
                                                                        $stmt->execute();
                                                                        $this->registrarDetalle();
                                                                        }
    

public function registrarDetalle(){
        require_once "conexion.php";
        $respuesta= $this->traerIdFactura();
        $idFactura = $respuesta["idFactura"];
    $tabla2 ="detallefactura";
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla2 (idDetalleFactura, idFactura,idProducto,cantidad) values(NULL,$idFactura,3,5)");
                                                                        $stmt->execute();
                                                                        }

public function traerIdFactura(){
    require_once 'conexion.php';
    $tabla="factura";
    $tabla2="detallefactura";
    $stmt = Conexion::conectar()->prepare("SELECT idFactura FROM $tabla where usuarioIdUsuario=4");
    $stmt->execute();
			if ($stmt) {
				return $stmt->fetch();
			}else{
				$d = "error";
				return $d;
			}
}
}

