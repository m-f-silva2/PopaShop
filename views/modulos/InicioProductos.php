<div class="content-wrapper" align="center">
    <div class="container" style="width: auto;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <section class="content-header">
              <h2>Productos</h2>
            </section>
        </div>
    </div>

<div class="row" id="row1" align="center">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <table class="table table-responsive table-striped" id="tablaProductos" style="border: 0px solid transparent;">
      <thead>
        <tr>
          <th style="border: 0px solid transparent;"></th>
          <th style="border: 0px solid transparent;"></th>
          <th style="border: 0px solid transparent;"></th>
          <th style="border: 0px solid transparent;"></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        include_once 'clases/patron/iterator/AgregadoProductos.php';
        include_once 'clases/class/Producto.php';
          $agregadoProductos = array();
          $iterator;
          $productos;
                require_once 'control/logica/ProductosGet.php';
               $datoCategorias = \Logica\ProductosGet::mostrarProductosPorCategoria();
               $agregadoProductos = new \Iterator\AgregadoProductos();
                foreach ($datoCategorias as $dato1) {
                  $productos= new \clase\Producto();
                  $productos->setIdProducto($dato1["idProducto"]);
                  $productos->setIdTipoProducto($dato1["idTipoProducto"]);
                  $productos->setNombreProducto($dato1["nombreProducto"]);
                  $productos->setPrecioProducto($dato1["precioProducto"]);
                  $productos->setCantidadProducto($dato1["cantidadProducto"]);
                  $productos->setFotoProducto($dato1["fotoProducto"]);
                  $productos->setIdUsuario($dato1["idUsuario"]);
                  $agregadoProductos->agregar($productos->getNombreProducto());
                  $agregadoProductos->agregar($productos->getFotoProducto());
                  $agregadoProductos->agregar($productos->getPrecioProducto());
                  $agregadoProductos->agregar($productos->getIdProducto());
                }


          
          //Obtiene iterador Concreto
          $iterator = $agregadoProductos->crearIterator();
          $fila = count($iterator);
          echo $fila;
          //var_dump($fila);

          for ($i=0; $iterator->hayMas() == true; $i++) {
            echo "<tr>";

            for ($j=0; $j < 3; $j++) { 
            echo '
              <td style="border: 0px solid transparent;" align="center">
              <ul id="prodCliente">
              <li>';
              print $iterator->siguiente();
              echo '</li>
              <li><img src="src/assets/productos/';
              print $iterator->siguiente();
              echo '" width="110px" class="profile-user-img img-responsive img-circle"></li>
              <li>';
              print $iterator->siguiente();
              echo '</li>
              <li><button class="botonDetalle" id="detailProducto" data-toggle="modal" data-target="#detalle-modal-cliente" value="';
              print $iterator->siguiente();
              echo '">Detalle</button></li><br>
              <li></li>              
              </ul>
              </td>';
              //var_dump($iterator->siguiente());
            }
            echo "</tr>";
          }
          
          
        /*$cont = 0;
        for ($i=0; $cont < count($datoProductos) ; $i++) { 
            
          echo "<tr>";
          for ($j=0; $j < 4 && $cont < count($datoProductos); $j++) { 
            
            echo '
              <td style="border: 0px solid transparent;" align="center">
              <ul id="prodCliente">
              <li>'.$datoProductos[$cont]["nombreProducto"].'</li>
              <li><img src="src/assets/productos/'.$datoProductos[$cont]["fotoProducto"].'" width="110px" class="profile-user-img img-responsive img-circle"></li>
              <li>'.$datoProductos[$cont]["precioProducto"].'</li>
              <li><button class="botonDetalle" id="detailProducto" data-toggle="modal" data-target="#detalle-modal-cliente" value="'.$datoProductos[$cont]["idProducto"].'">Detalle</button></li><br>
              <li></li>              
</ul>
              </td>';
              $cont++;
          }
          echo "</tr>";
              
        }*/
        echo '<script>
        $(document).ready(function(){
          $(document).on("click", "#detailProducto", function(){       
            var id=$(this).val();
            $.post("views/modal/detalleProducto.php?idProducto="+id, function(respuesta){
              $("#cliDetalleProducto").html(respuesta);
            });
          });
        });
        </script>';
        ?>
      </tbody>
      <tfoot>
        <tr>
          <th style="border: 0px solid transparent;"></th>
          <th style="border: 0px solid transparent;"></th>
          <th style="border: 0px solid transparent;"></th>
          <th style="border: 0px solid transparent;"></th>
        </tr>
      </tfoot>
    </table>
  </div>

  <script>
    $(function () {
      //Se llama al id de la tabla
      $('#tablaProductos').DataTable()
      //Carga las funciones de buscar y filtro con el id tablaVendedores2 que cambio para que lo reconozcan por ese id esas funciones.
      $('#tablaProductos2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    });
  </script>
</div>