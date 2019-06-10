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
        require_once "control/logica/ProductosGet.php";
       
        $datoProductos = Logica\ProductosGet::mostrarProductosPorCategoria();
        $cont = 0;
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