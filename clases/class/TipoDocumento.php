<?php  namespace clase;

class TipoDocumento{
    
    private $idTipoDocumento;
    private $tipoDeDocumento;
}

function __construct($idTipoDocumento, $tipoDeDocumento) {
    $this->idTipoDocumento = $idTipoDocumento;
    $this->tipoDeDocumento = $tipoDeDocumento;
}


function getIdTipoDocumento() {
    return $this->idTipoDocumento;
}

 function getTipoDeDocumento() {
    return $this->tipoDeDocumento;
}

 function setIdTipoDocumento($idTipoDocumento) {
    $this->idTipoDocumento = $idTipoDocumento;
}

 function setTipoDeDocumento($tipoDeDocumento) {
    $this->tipoDeDocumento = $tipoDeDocumento;
}








/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
