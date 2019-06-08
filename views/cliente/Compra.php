<div class="compra" id="compra">
    <div class="container" style="width: auto;">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <section class="content-header">
      <h3>
          <?php 
          
          require_once "control/logica/LogicaLogin.php";
                    $datoProductos = Logica\Login::traerDatosPorUsuario();
                    foreach ($datoProductos as $dato) {
                        echo "<div style='margin-left: 644px;'><tr><th>".$dato["nombrePersona"]."</th>
                                <th>".$dato["apellidoPersona"]."</th></tr></div>";
                    }
                    ?>
          
        Mis Productos
      </h3>
      <ol class="breadcrumb">
        <li><a href="inicio-cliente"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Productos</li>
        
      </ol>
    </section>
          <div class="compraDeta"></div>

    <!-- Main content -->
    <section class="content" align="center">
        <div class="box box-primary">
            <div class="box-body">
            <table class="table table-responsive table-hover" id="tablaProductos">
                  <style>
                .contenedorProductos{
                 margin: auto; width:250px; height: 250px; float: left;}
                ul{list-style: none; margin: 0px; padding: 0px;}
                ul li{ width: 150px;  }
                .contenedorProductos2{
                 margin: auto; width:250px; height: 250px; float: left;  margin-left: 80px; margin-right: 50px; margin-bottom: 20px;border: 1px solid #000;}
                ul{list-style: none; margin: 0px; padding: 0px;}
                ul li{ width: 150px; }
            </style>
                  <tbody id="tblProductos">
                    <?php 
                    if ($_POST["idCompraProducto"] != null) {
                      require_once "control/logica/ProductosGet.php";
                      $datoProductos = Logica\ProductosGet::productoDetalle($_POST["idCompraProducto"]);
                      foreach ($datoProductos as $dato) {
                          echo "
                              <div class='contenedorProductos'>
                              <ul>
                               <li><img src='src/assets/productos/".$dato["fotoProducto"]."' width='250px' height:'150px'></li>  
                             </ul>
                              </div>";
                      }
                      echo "<div  class='contenedorProductos2' align='center'>
                              <ul>
                              <li ><h3>".$dato["nombreProducto"]."</h3></li>
                                  <br><li> Categoria: ".$dato["descripcionProducto"]."</li>
                                  <br><li><h4> $ ".$dato["precioProducto"]."</h4></li>
                              </ul>
                              </div>";
                     
                      echo "<div  class='contenedorProductos2' align='center'>
                              <ul><li><h4>Datos del vendedor</h4></li>
                              <br><li ><h4>".$dato["nombrePersona"]." ".$dato["apellidoPersona"]."</h4></li>
                                  <br><li> Categoria: ".$dato["correoPersona"]."</li>
                                  <br><li> ".$dato["telefonoPersona"]."</li>
                                      
                              
                              </ul>
                              </div>";
                    }
                    ?>
                      <!--- botones cancelar, finalizar compra-->
                  <div class="modal-footer " id="login-footerM">
                      <div align="center">
                          <a href='inicio-cliente'><button>Cancelar</button></a></script>
                      <button   class='botonCompra' id="botonCompra" name="botonCompra" type="submit" value="enviar" >Finalizar Compra</button>
                          <script>
                              botonCompra.addEventListener("click", FinalizarCompra());
                             
                             function FinalizarCompra(){
                            
                                <?php
                                require_once "control/logica/ProductosGet.php";
                                require "control/logica/CompraLogica.php";
                                $datoProductos = Logica\ProductosGet::productoDetalle1();
                                foreach ($datoProductos as $dato) {
                            
                            $datosProducto = array(
                                'vendedorIdUsuario' => $dato['idUsuario'],
                                    'idProducto' => $dato['idProducto']
                            );
                            
                            }
                            
                            $registro = new Logica\CompraLogica($datosProducto);
                            ?>
                            
                             }
                             </script>
                          
                      </div></div>
                         
                  </tbody>
              </table>
            
            <!-- /.box-header -->
            </div>
            <!-- /.box-body -->
          </div>
      </div>

    </section>
      </div>
  </div>
<div class="row" id="row1">
    <div class="col-md-12">

        </div>
        </div><br>
    </div>
</div>