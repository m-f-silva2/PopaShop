<div id="detalle-modal-cliente" class="modal fade" role="dialog" align="center">
  <div class="modal-dialog" align="center">
        <div class="modal-content">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
            <div class="modal-header" style="background:#3c8dbc; color:white">
                <div align="center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <!--=====================================
        estilo de cajon productos
        ======================================-->
                     <style>
                .contenedorProductos2{width:220px;height: 220px;margin-left: 65px; float: left; background-color: #000\9;}
                ul{list-style: none;margin: 0px; padding: 0px; }
                ul li{width: 150px; }   
                .contenedorProductos1{float: left; background-color: #000\9; margin-left: 15px;}
                ul{list-style: none;margin: 0px; padding: 0px; }
                ul li{width: 210px; }  
            </style>
                    <h4 class="modal-title">Detalle</h4>
                </div>
                <div class="modal-body">
                    <form>
                    <!--=====================================
       Imagen detalle
        ======================================-->
                    <tbody id="tblProductos" >
                    <?php 
                    require_once "control/logica/ProductosGet.php";
                    $datoProductos = Logica\ProductosGet::productoDetalle();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div class='contenedorProductos1' >
                            <ul>
                           
                                <li><img src='src/assets/productos/".$dato["fotoProducto"]."' width='210px' height:'70px'></li>             
                                
                          </ul>
                          </div>
                          <div class='contenedorProductos2'>
                          <!--=====================================
                          Texto detalle
                          ======================================-->
                          <ul> <li>".$dato["nombreProducto"]."</li>
                              <li> $ ".$dato["precioProducto"]."</li></ul>
                         </div>  
                         
                        "; }
                    ?>
                    <li><a id='a'  href='Compra'><button>Comprar</button></a></li>
                    </tbody>
                     </form>
                </div>
                
            </div>
        </div></div></div>
  <!-- END DE MODAL -->
  