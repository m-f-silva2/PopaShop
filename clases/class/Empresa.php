<?php  namespace clase;
/*
 *Clase Empresa.
**/

class Empresa{
	//Atributos
	private $nombre;
	private $pais;
	private $departamento;
	private $ciudad;
	private $direccion;

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
	public function setPais($pais){
		$this->pais = $pais;
	}
	public function getPais(){
		return $this->pais;
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