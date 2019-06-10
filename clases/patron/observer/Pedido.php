<?php namespace Clase;
/**
 * Clase Partido
 * En este caso este es nuestro sujeto
 */
class Pedido implements \SplSubject
{
    protected $estado;
    protected $observers = array();
    public function __construct()
    {
    }
    public function setEstado($estado)
    {
        if ($estado != null) {
            $this->estado = $estado;
            $this->notify();
        }
    }
    public function getEstado()
    {
        return $this->estado;
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
}
?>