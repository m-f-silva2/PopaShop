<?php  namespace Logica;
/**
 *Login
**/

class ProductosGet{	
private $idCatego;
	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($datos){
		if (isset($datos)) {

		$this->idCatego = $datos["idCatego"];
                
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
            
            $idCatego= "limpieza";
            if($idCatego != null){
                require_once "conexion.php";
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla p inner join $tabla2 t on t.idTipoProducto=p.idTipoProducto WHERE t.descripcionProducto= '$idCatego'");
			//$stmt->bindParam(":item1", $this->idCatego, \PDO::PARAM_STR);
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
		$query="SELECT p.nombreProducto FROM `producto` p inner join `tipoproducto` t on (p.idTipoProducto = t.idTipoProducto) WHERE p.idProducto = 1" ;
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
        }

?>
