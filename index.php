<?php 

/**
 * Clase Index
 */
class Inicio{
    
    public function index(){
    //Ejecución de plantilla
    require_once "clases/Plantilla.php";
    $plantilla = new Clase\Plantilla();
    $plantilla->Plantilla();
    }
}

//Ejecución de index
$index = new Inicio();
$index->index();

?>