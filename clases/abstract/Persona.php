<?php namespace Clase;
/*
 *Clase Persona.
**/

class Persona{
    private $identificacion;
    private $nombre1;
    private $nombre2;
    private $apellido1;
    private $apellido2;

    //Metodos
	//Constructor
	public function __construct(){
		require_once "clases/class/Identificacion.php";
		$this->identificacion = new Identificacion();
	}

	//Getter y setters de atributos.
	public function setIdentificacion($tipo,$numero){
		$this->identificacion->setIdentificacion($numero);
		$this->identificacion->setTipo($tipo);
	}
	public function getIdentificacion(){
		$v_identificacion = array ('numero' => $this->identificacion->getIdentificacion(),'tipo' => $this->identificacion->getTipo()); 
		return $v_identificacion;
	}
	public function setNombre1($nombrePersona1){
		$this->nombre1 = $nombrePersona1;
	}
	public function getNombre1(){
		return $this->nombre1;
	}
	public function setNombre2($nombrePersona2){
		$this->nombre2 = $nombrePersona2;
	}
	public function getNombre2(){
		return $this->nombre2;
	}
	public function setApellido1($apellidoPersona){
		$this->apellido1 = $apellidoPersona;
	}
	public function getApellido1(){
		return $this->apellido1;
	}
	public function setApellido2($apellidoPersona){
		$this->apellido2 = $apellidoPersona;
	}
	public function getApellido2(){
		return $this->apellido2;
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