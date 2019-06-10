<?php  namespace Observer;
/*
 *Patron observer
 *Clase Pedido.
 *Se implementa con una de las librerias de php
**/
class Pedido implements \SplSubject{
	//Atributos
	private $estado;
	private $observers = array();

	public function __construct($estado)
    {
        $this->estado = $estado;
    }
	
	/**
     * La interface SplSubject nos obliga
     * a implementar los siguientes métodos
     */
    public function attach(\SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        $this->observers[$id] = $observer;
    }
    public function detach(\SplObserver $observer)
    {
        $id = spl_object_hash($observer);
        if (isset($this->observers[$id]))
            unset($this->observers[$id]);
    }
    public function notify()
    {
        foreach ($this->observers as $observer)
            $observer->update($this);
    }
	public function setEstado(){
		
	}
	public function getEstado(){
		
	}
}
?>