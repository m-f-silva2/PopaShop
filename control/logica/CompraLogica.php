<?php namespace Logica;
class CompraLogica{
    private $Class_Usuario;
    private $vendedorIdUsuario;
    //Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($datos){
           
	    $this->vendedorIdUsuario=$datos["vendedorIdUsuario"];	
            
            include_once  'clases/class/Usuario.php';
               
               $this->Class_Usuario = new \Clase\Usuario();
               $this->Class_Usuario->setIdUsuario($_SESSION["idUsuario"]);
		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->registrarUsuario();
                
	}
  
    
    public function registrarUsuario(){
 
    
    require_once "conexion.php";
    $tabla = "factura";
    
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (idFactura, clienteIdUsuario,
                                                                        vendedorIdUsuario,
                                                                        fechaFactura,
                                                                        totalFactura,
                                                                        idCiudad) values(NULL,:item,3,'2019-04-08',9600,1) ");
                                            $stmt->bindParam(":item", $this->Class_Usuario->getIdUsuario(), \PDO::PARAM_INT);
                                                                       // $stmt->bindParam(":item8", $this->vendedorIdUsuario, \PDO::PARAM_INT);
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
                                                                        
public function stock(){
 
    }

public function traerIdFactura(){
    require_once 'conexion.php';
    $tabla="factura";
    $tabla2="detallefactura";
    $stmt = Conexion::conectar()->prepare("SELECT idFactura FROM $tabla where clienteIdUsuario=:item1");
     $stmt->bindParam(":item1", $this->Class_Usuario->getIdUsuario(), \PDO::PARAM_INT);
    $stmt->execute();
			if ($stmt) {
				return $stmt->fetch();
			}else{
				$d = "error";
				return $d;
			}
}
}

