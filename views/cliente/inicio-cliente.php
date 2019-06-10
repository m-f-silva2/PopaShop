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
                  $agregadoProductos->agregar($productos);
                }


          
          //Obtiene iterador Concreto
          $iterator = $agregadoProductos->crearIterator();
          $cont = 0;
          while ($iterator->hayMas() == true) {
	      $siguiente = @$iterator->siguiente();
            if ($cont == 0) {
                echo "<tr>";
              }
            echo "
            <td style='border: 0px solid transparent;' align='center'>
            <ul id='prodCliente'>";
	    
              echo "
              
              <div class='col-md-2'>
              <li>".$siguiente->getNombreProducto()."
              </li>
              <li><img src='src/assets/productos/".$siguiente->getFotoProducto()."' width='110px' class='profile-user-img img-responsive img-circle'></li>
              <li>".$siguiente->getPrecioProducto()."</li>
              <li><button class='botonDetalle' id='detail' data-toggle='modal' data-target='#detalle-modal' value='".$siguiente->getIdProducto()."'>Detalle</button></li><br>
              <li></li>
              </div>
              ";
              echo "</ul></td>";
              $cont++;
              if ($cont == 3) {
                $cont = 0;
                echo "</tr>";
              }
            
          }
        echo '<script>
        $(document).ready(function(){
          $(document).on("click", "#detail", function(){
          var id=$(this).val();
            $.post("views/modal/detalleProducto.php?v_idProductoCompra="+id, function(respuesta){
              $("#contDetalleProducto1").html(respuesta);
              $("#idCompraProducto").hide();
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

    /*$(function () {
      //valor = document.getElementById("#detailProducto").value;
      if ($('.botonDetalle').val() != null) {
        alert($('#detailProducto').val());
      }else{
        $('.botonDetalle').hide();
      }
    });*/
  </script>
</div>