<div class="row" id="row1">
    <div class="col-md-10">
            <div id="tablaProductos" align="center">
              <h4>Productoss</h4>
              <table class="table table-responsive table-hover" id="tablaProductos">
                  <thead style="background-color: #eceff2;">
                    <th id="tablaPlanTh">id</th>
                    <th id="tablaPlanTh">Categoria</th>
                    <th id="tablaPlanTh">Nombre</th>
                    <th id="tablaPlanTh">Valor </th>
                    <th id="tablaPlanTh">Cantidad</th>
                    <th id="tablaPlanTh">Foto</th>
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