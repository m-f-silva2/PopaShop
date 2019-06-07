<div align="center">  <h1 >Administrar vendedores</h1>  </div>
<table class="table table-responsive table-hover" id="tablaProductos" style="width: 500px; margin: auto; border: 1px solid #000; padding: 0px; height: 250px;" align="center" >
                  <thead style="background-color: #eceff2;">
                    <th id="tablaProdTh">Empresa</th>
                    <th id="tablaProdTh">Numero de Contacto</th>
                    
                 
                 
                  </thead>
<?php 
                    require_once "control/logica/AdministrarVendedoresLogica.php";
                    $datoProductos = Logica\AdminVendedor::mostrarVendedores();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div>
                            <tr><th>".$dato["nombrePersona"]."</th>
                                <th>".$dato["correoPersona"]."</th></tr>
                            
                            </div>"; }
                    ?>
                  </table>
<div align="center">  <h1 >Administrar Empresas</h1>  </div>
<table class="table table-responsive table-hover" id="tablaProductos" style="width: 500px; margin: auto; border: 1px solid #000; padding: 0px; height: 250px;" align="center">
                  <thead style="background-color: #eceff2;">
                    <th id="tablaProdTh">Empresa</th>
                    <th id="tablaProdTh">Numero de Contacto</th>
                    
                  </thead>
  


                        <?php 
                    require_once "control/logica/AdministrarVendedoresLogica.php";
                    $datoProductos = Logica\AdminVendedor::mostrarEmpresas();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div  class='contenedorProductos'>
                            <tr><th>".$dato["nombreEmpresa"]."</th>
                                <th>".$dato["contactoEmpresa"]."</th></tr>
                            
                            </div>"; }
                    ?>
</table>