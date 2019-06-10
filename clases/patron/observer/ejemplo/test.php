<?php  
require_once "Pedido.php";
require_once "Mail.php";
require_once "Log.php";
require_once "../../../../control/logica/conexion.php";


$stmt = \Logica\Conexion::conectar()->prepare("
		SELECT df.estadoPedido 
		from usuario u 
		INNER JOIN factura f ON f.clienteIdUsuario = u.idUsuario 
		INNER JOIN detallefactura df ON df.idFactura = f.idFactura 
		WHERE u.idUsuario = 4");
//$stmt->bindParam(":item1", 4, \PDO::PARAM_INT);
$stmt->execute();
//SELECT df.estadoPedido from usuario u INNER JOIN factura f on f.clienteIdUsuario = u.idUsuario INNER JOIN detallefactura df ON df.idFactura = f.idFactura where u.idUsuario = 4;
while ($filas = $stmt->fetch(\PDO::FETCH_ASSOC)) {$estadoPedido[] = $filas;}
//echo $estadoPedido[0]["estadoPedido"];
$pedido = new Pedido();

//Observadores puede ser la clase abstracta observador
$pedido->attach(new Mail());
$pedido->setEstado($estadoPedido[0]["estadoPedido"]);
//$partido->gol('Colombia');
//$partido->gol('Peru');
//echo $partido->getScore();
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