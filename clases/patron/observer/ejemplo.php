<?php
/**
 * Clase Partido
 * En este caso este es nuestro sujeto
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
/**
 * Primer Observador Envia Email
 */
class Mail implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo 'Enviando Email con marcador ' . $subject->getScore() . PHP_EOL;
        mail('email@test.com', 'Hubo un gol', $subject->getScore());
    }
}
/**
 * Segundo Observador, guarda en un archivo
 */
class Log implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo 'Guardando archivo con marcador ' . $subject->getScore() . PHP_EOL;
        file_put_contents('partido.log', $subject->getScore(), FILE_APPEND);
    }
}
$partido = new Partido('Colombia', 'Peru');
$partido->attach(new Mail());
$partido->attach(new Log());
$partido->gol('Colombia');
$partido->gol('Colombia');
$partido->gol('Peru');
echo $partido->getScore();
/**
 * Resultado:
 * Enviando Email con marcador Colombia: 1 | Peru: 0
 * Guardando archivo con marcador Colombia: 1 | Peru: 0
 *
 * Enviando Email con marcador Colombia: 2 | Peru: 0
 * Guardando archivo con marcador Colombia: 2 | Peru: 0
 *
 * Enviando Email con marcador Colombia: 2 | Peru: 1
 * Guardando archivo con marcador Colombia: 2 | Peru: 1
 * Colombia: 2 | Peru: 1
 **/
?>