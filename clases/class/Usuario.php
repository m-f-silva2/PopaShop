<?php  namespace Clase;
/*
 *Clase Usuario.
**/
include "clases/abstract/Persona.php";
class Usuario extends Persona{
	//Atributos
    private $idUsuario;
	private $nombre;
	private $password;
	private $rol;
	private $correo;
	private $persona;
	private $telefono;
	private $direccion;

	//Metodos
	//Constructor
	public function __construct(){

	}
        function getIdUsuario() {
            return $this->idUsuario;
        }

        function setIdUsuario($idUsuario) {
            $this->idUsuario = $idUsuario;
        }

        	//Getter y setters de atributos.
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function getPassword(){
		return $this->password;
	}
	public function setRol($rol){
		$this->rol = $rol;
	}
	public function getRol(){
		return $this->rol;
	}
	public function setCorreo($correo){
		$this->correo = $correo;
	}
	public function getCorreo(){
		return $this->correo;
	}
	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}
	public function getTelefono(){
		return $this->telefono;
	}
	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}
	public function getDireccion(){
		return $this->direccion;
	}
}
?>