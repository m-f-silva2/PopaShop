<div class="row" id="row1" align="center">
  <div class="col-md-12">
        <div class="content-wrapper">
        <section class="content-header">
   <!--=====================================
        Tabla de categorias
        ======================================-->
              <table class="table table-responsive table-hover" id="tablaProductos">
                  <thead style="background-color: #eceff2;">
                      <!--=====================================
        estilo de cajon productos
        ======================================-->
                     <style>
                #contenedorProductos{
                 margin: auto;
                 width:250px;
                 height: 250px;
                 float: left;
                 margin-right: 50px;
                 margin-bottom: 20px;
                 border: 1px solid #000;
                }
                
                #contenedorProductos > ul{
                    list-style: none;
                    margin: 0px;
                    padding: 0px;
                }
                #contenedorProductos > ul ,#contenedorProductos > li{
                    width: 50px;                  
                }
            </style>
                  
                  </thead>
                  <h4>Categorias</h4>
                  <br>
                  <tbody id="tblCatego">
                    <?php 
                    require_once "control/logica/ProductosGet.php";
                    $datoCategorias = Logica\ProductosGet::categorias();
                    
                    foreach ($datoCategorias as $dato1) {
                      echo "<select name='Categorias' id='logSelect'>
                            <option>".$dato1["idTipoProducto"]."</option>
                            <option>".$dato1["descripcionProducto"]."</option>                                
                            </select>";
                      
                      
                    }
                      
                    ?>               
                  </tbody>
                  <br>
                  </table>
                  <table class="table table-responsive table-hover" id="tablaProductos">
                      
                      <!--=====================================
        tabla de productos
        ======================================-->
                      <h4>Productos</h4>
                  <tbody id="tblProductos">
                    <?php 
                    require_once "control/logica/ProductosGet.php";
                    $datoProductos = Logica\ProductosGet::mostrarProductos();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div id ='contenedorProductos'>
                            <ul>
                            <li>".$dato["nombreProducto"]."</li>
                                <li><img src='src/assets/productos/".$dato["fotoProducto"]."' width='120px' height:'80px'></li>
                                
                                                            
                                <li> $ ".$dato["precioProducto"]."</li>
                                    
                               
                                <li id='buttonLi'><button data-toggle='modal' data-target='#modalAgregarSucursal'>DETALLE</button>
                            </ul>
                            </div>";
                        
                        
                        
                    }
                    ?>               
                  </tbody>
                  </table>
                </section>
      </div>
    </div>
</div>