<?php  
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
?>