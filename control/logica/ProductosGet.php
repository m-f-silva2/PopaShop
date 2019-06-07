<?php  namespace Logica;
/**
 *Login
**/

class ProductosGet{	
    private $idtipoProducto;
    private $Class_Catego;

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($datos){
		if (isset($datos)) {
                
                    
                    
		$this->idtipoProducto = $datos["tipoProducto"];
                
                
                $this->mostrarProductosPorCategoria();
		
	}
        }

	//Validar datos enviados del formulario con los de la base de datos.
        public function buscador(){
            $tabla = "producto";
			require_once "conexion.php";
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where nombreProducto=':item'");
                       // $stmt->bindParam(":item", $this->nombreP, \PDO::PARAM_STR);
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
        
   
        public function mostrarProductosPorCategoria(){
            $tabla = "producto";
            $tabla2 ="tipoproducto";
           
            $nombreCatego= "true";
            if($nombreCatego == "tru"){
                require_once "conexion.php";
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla p inner join $tabla2 t on t.idTipoProducto=p.idTipoProducto WHERE t.descripcionProducto = :item");
			$stmt->bindParam(":item", $this->idtipoProducto, \PDO::PARAM_STR);
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
            }else{
                $tabla = "producto";
			require_once "conexion.php";
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
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

        public function productosVendedor(){
		$tabla = "producto";
            
			require_once "conexion.php";
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where idUsuario=3 ");
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
        public function categorias(){
              $tabla = "tipoproducto";
			require_once "conexion.php";
                        
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt->execute();
                        
			if ($stmt) {
				while ($filas = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            		$catego[] = $filas;
        		}
				return $catego;
			}else{
				$d = "error";
				return $d;
			}
                      
        }
       public function  productoPorVendedor(){
           $tabla = "producto";
			require_once "conexion.php";
                        
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where idUsuario=3");
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
       public function  productoDetalle(){
           $tabla = "producto";
           $tabla2 = "tipoproducto";
           $tabla3="usuario";
           $tabla4="persona";
			require_once "conexion.php";
                        
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla p inner join $tabla2 t on p.idTipoProducto=t.idTipoProducto inner join $tabla3 u on u.idUsuario=p.idUsuario INNER join $tabla4 pe on pe.idPersona=u.idPersona where idProducto=3");
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
