<?php  
/*
 *Patron iterator.
 *Interface Cliente.
**/
Interface IIterator{

	//Metodos
	public function Primero();
	public function Siguiente();
	public function HayMas();
	public function ElementoActual();
	public function Ordenar();
}
?>