<?php  
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
?>