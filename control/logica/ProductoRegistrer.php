<?php  namespace Logica;
/**
 *Login
**/

class RegistroProducto{

	private $idTipoProducto;
	private $nombreProducto;
	private $precioProducto;
	private $cantidadProducto;
	private $fotoProducto;
	private $Class_Producto;
    private $Class_Usuario;
        

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($datos){
	 include_once  'clases/class/Usuario.php';
               
               $this->Class_Usuario = new \Clase\Usuario();
               $this->Class_Usuario->setIdUsuario($_SESSION["idUsuario"]);
	       
		//$this->idTipoProducto = $datos["tipoProducto"];
		//$this->precioProducto = $datos["precioProducto"];
		//$this->cantidadProducto = $datos["cantidadProducto"];
		//$this->fotoProducto = $datos["fotoProducto"];
                include_once  'clases/class/Producto.php';
                $this->Class_Producto= new \clase\Producto();
                
                $this->Class_Producto->setIdTipoProducto($datos["tipoProducto"]);
                $this->Class_Producto->setNombreProducto($datos["nombreProducto"]);
                $this->Class_Producto->setPrecioProducto($datos["precioProducto"]);
                $this->Class_Producto->setCantidadProducto($datos["cantidadProducto"]);
               $this->Class_Producto->setFotoProducto($datos["fotoProducto"]);
                //$this->Class_Usuario->
//Aqui si se puede acceder a esta funcion de tipo private.
		$this->validarRegistro();
	}

	//Validar datos enviados del formulario con los de la base de datos.
	public function validarRegistro(){
			
			require_once "conexion.php";
			$tabla = "producto";
			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(
				idProducto,
				idTipoProducto,
				nombreProducto,
				precioProducto,
				cantidadProducto,
				fotoProducto, idUsuario) VALUES(NULL,:item1,:item2,:item3,:item4,:item5,:item6)");

			$stmt->bindParam(":item1", $this->Class_Producto->getIdTipoProducto(), \PDO::PARAM_INT);
			$stmt->bindParam(":item2", $this->Class_Producto->getNombreProducto(), \PDO::PARAM_STR);
			$stmt->bindParam(":item3", $this->Class_Producto->getPrecioProducto(), \PDO::PARAM_INT);
			$stmt->bindParam(":item4", $this->Class_Producto->getCantidadProducto(), \PDO::PARAM_INT);
            $stmt->bindParam(":item5", $this->Class_Producto->getFotoProducto(), \PDO::PARAM_STR);
            $stmt->bindParam(":item6", $this->Class_Usuario->getIdUsuario(), \PDO::PARAM_STR);
			
			$stmt->execute();
			if ($stmt) {
				$d = true;
				return $d;
			}else{
				$d = false;
				return $d;
			}
                        
	}
        public function Verificarcategorias(){
              $tabla = "tipoproducto";
			require_once "conexion.php";
                        
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where descripcionProducto=:item1");
			
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