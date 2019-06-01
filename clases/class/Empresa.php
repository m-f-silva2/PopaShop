<?php  
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
	public function set($nombre){
		$this->nombre = $nombre;
	}
	public function get(){
		return $this->nombre;
	}
	public function set($pais){
		$this->pais = $pais;
	}
	public function get(){
		return $this->pais;
	}
	public function set($departamento){
		$this->departamento = $departamento;
	}
	public function get(){
		return $this->departamento;
	}
	public function set($ciudad){
		$this->ciudad = $ciudad;
	}
	public function get(){
		return $this->ciudad;
	}
	public function set($direccion){
		$this->direccion = $direccion;
	}
	public function get(){
		return $this->direccion;
	}
}
?>