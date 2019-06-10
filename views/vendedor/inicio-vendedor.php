<?php  
require_once "clases/patron/observer/Pedido.php";
require_once "clases/class/Vendedor.php";
require_once "control/logica/conexion.php";

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
$pedido = new Clase\Pedido();

//Observadores puede ser la clase abstracta observador

?>
<div class="row" id="row1" align="center">
  <div class="col-md-12" style="background-color: #eceff2" align="center">
    <div class="content-wrapper" align="left">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <section class="content-header">            
          <h3>Inicio Vendedor</h3>
          <?php $pedido->attach(new Clase\Vendedor());
          $pedido->setEstado($estadoPedido[0]["estadoPedido"]);  
          ?>
        </section>
        <section class="content">
          <h3>Bienvenido</h3>
        </section>
      </div>
    </div>
  </div>
</div>