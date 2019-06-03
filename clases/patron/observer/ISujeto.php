<?php  namespace Observer;
/*
 *Patron observer
 *Interfaz Sujeto.
**/
interface ISujeto{
	
	//Metodos
	public function añadir();
	public function eliminar();
	public function notificar();
	
}
?>