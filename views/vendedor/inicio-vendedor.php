<div class="row" id="row1" align="center">
    <div class="col-md-12">
        <div class="content-wrapper">
        <section class="content-header">
   <!--=====================================
       
        ======================================-->
   
              <table class="table table-responsive table-hover" id="tablaProductos">
                  <thead style="background-color: #eceff2;">
                      <!--=====================================
        estilo de cajon productos
        ======================================-->
                     <style>
                .contenedorProductos{
                 margin: auto;
                 width:250px;
                 height: 250px;
                 float: left;
                 margin-right: 50px;
                 margin-bottom: 20px;
                 border: 1px solid #000;
                }
                
                ul{
                    list-style: none;
                    margin: 0px;
                    
                    padding: 0px;
                }
                ul li{
                    
                    width: 150px;                  
                }
            </style>
                  
                  </thead>
                  <h4>Categorias</h4>
                  <br>
                  <tbody id="tblCatego">
                  
                      <select name='descripcionProducto' id='descripcionProducto'>
                         
                          <option id="descripcionProducto" value="">Todo<?php 
                          require_once "control/logica/ProductosGet.php";
                          $datoCategorias = Logica\ProductosGet::categorias();
                          foreach ($datoCategorias as $dato1) {
                          $descripcion=$dato1["descripcionProducto"];
                          echo "<option>".$descripcion."</option>";
                          }
                          ?></option>
                       </select>
                      <input type="submit" onclick="return catego()"value="Enviar">
                      
                      <script>
                      function catego(){
                          <?php 
                           
                            ?>
                      alert("buscarCategoria");
                      }
                      </script>
                         
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
                    $datoProductos = Logica\ProductosGet::mostrarProductosPorCategoria();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div class='contenedorProductos'>
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
                  
              
            
            
          <h1>Página no encontrada</h1>
          <ol class="breadcrumb">
            <?php 
            //El @ evita que salga un error por no tener algun valor en la variable $sesionRol
            @$sesionRol = $_SESSION["rol"];
            switch ($sesionRol) {
              case 'Administrador':
                echo '<li><a href="inicio-admin"><i class="fa fa-home"></i> Inicio</a></li>';
                break;
              case 'Vendedor':
                echo '<li><a href="inicio-vendedor"><i class="fa fa-home"></i> Inicio</a></li>';
                break;
              default:
                echo '<li><a href="inicio-cliente"><i class="fa fa-home"></i> Inicio</a></li>';
                break;
            }
            ?>      
            <li class="active">Página no encontrada</li>
          </ol>
        </section>
        <section class="content">
          <div class="error-page">
            <h2 class="headline text-primary">404</h2> 
            <div class="error-content">
              <h3>
                <i class="fa fa-warning text-primary"></i> 
                Ops! Página no encontrada.
              </h3>
              <p>Puedes regresar haciendo 
                <?php 
                switch ($sesionRol) {
                  case 'Administrador':
                    echo '<a href="inicio-admin">click aquí.</a>';
                    break;
                  case 'Vendedor':
                    echo '<a href="inicio-vendedor">click aquí.</a>';
                    break;
                  default:
                    echo '<a href="inicio-cliente">click aquí.</a>';
                    break;
                }
                ?>
              </p>
            </div>
          </div>  
        </section>
      </div>
    </div>
</div>