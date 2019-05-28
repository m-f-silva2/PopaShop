<?php 
class Departamento{
    public $idDepartamento;
    public $nombreDepartamento;
}

function getIdDepartamento() {
    return $this->idDepartamento;
}

 function getNombreDepartamento() {
    return $this->nombreDepartamento;
}

 function setIdDepartamento($idDepartamento) {
    $this->idDepartamento = $idDepartamento;
}

 function setNombreDepartamento($nombreDepartamento) {
    $this->nombreDepartamento = $nombreDepartamento;
}


?>