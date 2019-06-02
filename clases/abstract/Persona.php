<?php 


class Persona{
    private $id;
    private $idTipoDocumento;
    private $documento;
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;
    private $correo;
    private $telefono;
    private $avatar;
    private $direccion;

    //Metodos
	//Constructor
	public function __construct(){

	}

	//Getter y setters de atributos.
	public function setIdTipoDocumento($idTipoDocumento){
		$this->idTipoDocumento = $idTipoDocumento;
	}
	public function getIdTipoDocumento(){
		return $this->idTipoDocumento;
	}
	public function setDocumentoPersona($documentoPersona){
		$this->documentoPersona = $documentoPersona;
	}
	public function getDocumentoPersona(){
		return $this->documentoPersona;
	}
	public function setNombrePersona($nombrePersona){
		$this->nombrePersona = $nombrePersona;
	}
	public function getNombrePersona(){
		return $this->nombrePersona;
	}
	public function setApellidoPersona($apellidoPersona){
		$this->apellidoPersona = $apellidoPersona;
	}
	public function getApellidoPersona(){
		return $this->apellidoPersona;
	}
	public function setCorreoPersona($correoPersona){
		$this->correoPersona = $correoPersona;
	}
	public function getCorreoPersona(){
		return $this->correoPersona;
	}
	public function setTelefonoPersona($telefonoPersona){
		$this->telefonoPersona = $telefonoPersona;
	}
	public function getTelefonoPersona(){
		return $this->telefonoPersona;
	}
	public function setAvatarPersona($avatarPersona){
		$this->avatarPersona = $avatarPersona;
	}
	public function getAvatarPersona(){
		return $this->avatarPersona;
	}
	public function setDireccionPersona($direccionPersona){
		$this->direccionPersona = $direccionPersona;
	}
	public function getDireccionPersona(){
		return $this->direccionPersona;
	}
}
?>