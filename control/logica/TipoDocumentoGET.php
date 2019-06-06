<?php  namespace Logica;

class TipoDocumentoGET{
   
    function __construct() {
   $this->traerTipo();          
    }
    
    public function traerTipo(){
        $tabla = "tipodocumento";
			require_once "conexion.php";
                        
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt->execute();
                        
			if ($stmt) {
				while ($filas = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            		$documento[] = $filas;
        		}
				return $documento;
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
