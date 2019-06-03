<?php  namespace clase;
/*
 *clase Fecha.
**/
class Fecha{
	//Atributos
	private $dia;
	private $mes;
	private $anio;

	//Getter y setter
	public function setDia($dia){
		$this->dia = $dia;
	}
	public function getDia(){
		return $this->dia;
	}
	public function setMes($mes){
		$this->mes = $mes;
	}
	public function getMes(){
		return $this->mes;
	}
	public function setAnio($anio){
		$this->anio = $anio;
	}
	public function getAnio(){
		return $this->anio;
	}
}
?>