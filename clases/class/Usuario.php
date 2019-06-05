<?php  namespace Clase;
/*
 *Clase Usuario.
**/

class Usuario{
	//Atributos
	private $nombre;
	private $password;
	private $rol;
	private $correo;
	private $persona;
	private $telefono;

	//Metodos
	//Constructor
	public function __construct(){

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
	public function setDepartamento($departamento){
		$this->departamento = $departamento;
	}
	public function getDepartamento(){
		return $this->departamento;
	}
	public function setCiudad($ciudad){
		$this->ciudad = $ciudad;
	}
	public function getCiudad(){
		return $this->ciudad;
	}
	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}
	public function getDireccion(){
		return $this->direccion;
	}
}
?>