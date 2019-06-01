<div class="row" id="row1" align="center">
    <div class="col-md-12">
        <div class="content-wrapper">
        <section class="content-header">
            <style>
                .contenedorProductos{
                 margin: auto;
                 width: 960px;
                 border: 1px solid #000;
                }
                
                ul{
                    list-style: none;
                    margin: 0px;
                    padding: 0px;
                }
               
                    
                
                
                
            </style>
            <h4>Productos</h4>
              <table class="table table-responsive table-hover" id="tablaProductos">
                  <thead style="background-color: #eceff2;">
                      <div class='contenedorProductos'>
                  <ul >
                  
                  <li  id="tablaPlanTh">id</li>
                    <li id="tablaPlanTh">Categoria</li>
                    <li id="tablaPlanTh">Nombre</li>
                    <li id="tablaPlanTh">Valor </li>
                    <li id="tablaPlanTh">Cantidad</li>
                    <li id="tablaPlanTh">Foto</li>
                  </ul>
                    
                      </div>
                  </thead>
                  <tbody id="tblProductos">
                    <?php 
                    require_once "control/logica/ProductosGet.php";
                    $datoProductos = Logica\ProductosGet::MostrarProductos();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div class='contenedorProductos'>
                            <ul>
                                <li>".$dato["idProducto"]."</li>
                                <li>".$dato["idTipoProducto"]."</li>
                                <li>".$dato["nombreProducto"]."</li>
                                <li>".$dato["precioProducto"]."</li>
                                <li>".$dato["cantidadProducto"]."</li>
                                <li>".$dato["fotoProducto"]."</li>
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