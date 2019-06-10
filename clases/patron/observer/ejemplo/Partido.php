<?php
/**
 * Clase Partido
 * En este caso este es nuestro sujeto
 *Ejemplo: Fútbol

Imaginemos que tenemos una aplicación que nos da el marcador de un partido de fútbol. Nosotros queremos que cada vez que haya un gol, nos envíe un email con el marcador y que adicionalmente lo escriba en un archivo local.
 */
class Partido implements \SplSubject
{
    protected $teams = array();
    protected $observers = array();
    public function __construct($team1, $team2)
    {
        $this->teams = array(
            $team1 => 0,
            $team2 => 0
        );
    }
    public function gol($team)
    {
        $this->teams[$team]++;
        $this->notify();
    }
    public function getScore()
    {
        $return = '';
        foreach ($this->teams as $name => $score)
            $return .= $name . ': ' . $score . ' | ';
        return trim($return, ' | ');
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