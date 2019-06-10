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
          while ($iterator->hayMas() == true) {
            echo "<tr>";
            for ($j=0; $j < 3; $j++) {
              echo "
              <td style='border: 0px solid transparent;' align='center'>
              <ul id='prodCliente'>
              <li>".@$iterator->siguiente()."
              </li>
              <li><img src='src/assets/productos/".@$iterator->siguiente()."' width='110px' class='profile-user-img img-responsive img-circle'></li>
              <li>".@$iterator->siguiente()."</li>
              <li><button class='botonDetalle' id='detailProducto' data-toggle='modal' data-target='#detalle-modal-cliente' value='".@$iterator->siguiente()."'>Detalle</button></li><br>
              <li></li>              
              </ul>
              </td>";
            }
            echo "</tr>";
          }
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

    $(function () {
      //valor = document.getElementById("#detailProducto").value;
      if ($('.botonDetalle').val() != null) {
        alert($('#detailProducto').val());
      }else{
        $('.botonDetalle').hide();
      }
    });
  </script>
</div>