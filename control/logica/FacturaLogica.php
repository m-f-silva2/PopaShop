<?php  namespace Logica;
/**
 *Login
**/

class FacturaLogica{	
private $nombreP;
	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct($datos){
		if (isset($datos)) {

		$this->nombreP = $datos["nombreP"];
		//Aqui si se puede acceder a esta funcion de tipo private.
		$this->mostrarProductos();
	}
        }

	public function facturaGet(){

			$tabla = "detalleFactura";
                        $tabla2 = "factura";
                        $tabla3 = "producto";
			require_once "conexion.php";
			$stmt = Conexion::conectar()->prepare("SELECT p.nombreProducto,p.precioProducto,f.totalFactura,f.fechaFactura,d.cantidad  FROM $tabla d inner join $tabla2 f on f.idFactura=d.idFactura INNER join $tabla3 p on p.idProducto=d.idProducto WHERE f.usuarioIdUsuario=4");
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
        public function mostrarVendedores(){
            $tabla = "persona";
            $tabla2= "usuario";
			require_once "conexion.php";
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla p inner join $tabla2 u on p.idPersona=u.idPersona  WHERE u.idRol=2");
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
