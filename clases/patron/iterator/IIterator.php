<?php  namespace Iterator;
/*
 *Patron iterator.
 *Interface Cliente.
**/
Interface IIterator{

	//Metodos
	public function primero();
	public function siguiente();
	public function hayMas();
	public function elementoActual();
	public function ordenar();
}
?>