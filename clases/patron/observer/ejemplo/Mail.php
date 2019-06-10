<?php  
/**
 * Primer Observador Envia Email
 */
class Mail implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo 'Estado del pedido: '; 
        switch ($subject->getEstado()) {
        	case 1:
        		echo "Pendiente...". PHP_EOL;
        		break;        	
        	case 2:
        		echo "Enviado...". PHP_EOL;
        		break;
        }
    }
}
?>