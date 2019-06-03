<?php  namespace Observer;
/*
 *Patron observer
 *Clase abstracta Observador.
**/
abstract class Observador{
	//Atributos
	private $sujeto;
	
	//Metodos
	abstract public function actualizar();
}
?>