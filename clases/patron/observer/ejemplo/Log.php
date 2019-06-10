<?php  
/**
 * Segundo Observador, guarda en un archivo
 */
class Log implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo 'Guardando archivo con estado: ' . $subject->getEstado() . PHP_EOL;
        file_put_contents('pedido.log', $subject->getEstado(), FILE_APPEND);
    }
}
?>