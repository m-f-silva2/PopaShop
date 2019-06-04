

<div align="center">  <h1 >Ventas</h1>  </div>
<table class="table table-responsive table-hover" id="tablaProductos" style="width: 500px; margin: auto; border: 1px solid #000; padding: 0px; height: 250px;" align="center" >
                  <thead style="background-color: #eceff2;">
                    <th id="tablaProdTh">Nombre</th>
                    <th id="tablaProdTh">Precio Unitario</th>
                    <th id="tablaProdTh">Cantidad</th>
                    <th id="tablaProdTh">Total</th>
                    <th id="tablaProdTh">Fecha de compra</th>
                   
                    
                 
                 
                  </thead>
<?php 
                    require_once "control/logica/FacturaLogica.php";
                    $datoFacturas = Logica\FacturaLogica::facturaGet();
                    foreach ($datoFacturas as $dato) {
                        echo "
                            <div>
                            <tr><th>".$dato["nombreProducto"]."</th>
                                <th>".$dato["precioProducto"]."</th>
                                    <th>".$dato["cantidad"]."</th>
                                    <th> $ ".$dato["totalFactura"]."</th>
                                        <th>".$dato["fechaFactura"]."</th></tr>
                                            
                            
                            </div>"; }
                    ?>
                  </table>