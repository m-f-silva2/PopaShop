<div class="row" id="row1">
    <div class="col-md-10">
            <div id="tablaProductos" align="center">
              <h4>Productoss</h4>
              <table class="table table-responsive table-hover" id="tablaProductos">
                  <thead style="background-color: #eceff2;">
                    <th id="tablaPlanTh">#</th>
                    <th id="tablaPlanTh">Capital</th>
                    <th id="tablaPlanTh">Valor Cuota</th>
                    <th id="tablaPlanTh">Valor Seguro</th>
                    <th id="tablaPlanTh">Valor Interes</th>
                    <th id="tablaPlanTh">Valor Estudio Credito</th>
                    <th id="tablaPlanTh">Total cuota</th>
                  </thead>
                  <tbody id="tblProductos">
                    <?php 
                    require_once "control/logica/ProductosGet.php";
                    $datoProductos = Logica\ProductosGet::MostrarProductos();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <tr>
                                <th>".$dato["idProducto"]."</th>
                                <th>".$dato["idTipoProducto"]."</th>
                                <th>".$dato["nombreProducto"]."</th>
                                <th>".$dato["precioProducto"]."</th>
                                <th>".$dato["cantidadProducto"]."</th>
                                <th>".$dato["fotoProducto"]."</th>
                            </tr>";
                    }
                    ?>                
                  </tbody>
              </table>
            </div>
        </div>
        </div>