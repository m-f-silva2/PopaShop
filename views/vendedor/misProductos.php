<div class="content-wrapper">
    <div class="container" style="width: auto;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <section class="content-header">            
            <ol class="breadcrumb">
                <li><h3>Administrar mis productos</h3></li>
                <li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active">Administrar mis productos</li>
            </ol>
            </section>
        </div>
    </div>

<div class="row" id="row1" align="center">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <table class="table table-responsive table-striped" id="tablaVendedores" style="border: 0px solid transparent;">
      <thead>
        <tr>
          <th style="border: 0px solid transparent;"></th>
          <th style="border: 0px solid transparent;"></th>
          <th style="border: 0px solid transparent;"></th>
        </tr>
      </thead>
      <tbody>
        <?php 
        require_once "control/logica/ProductosGet.php";
        $datoProductos = Logica\ProductosGet::productoPorVendedor();
        $cont = 0;
        for ($i=0; $cont < count($datoProductos) ; $i++) { 
          echo "<tr>";
          for ($j=0; $j < 3; $j++) { 
            echo '
              <td style="border: 0px solid transparent;" align="center">
              <ul id="prodCliente">
              <li>'.$datoProductos[$cont]["nombreProducto"].'</li>
              <li><img src="src/assets/productos/'.$datoProductos[$cont]["fotoProducto"].'" width="110px" class="profile-user-img img-responsive img-circle"></li>
              <li>'.$datoProductos[$cont]["precioProducto"].'</li>
              <li><button class="btn btn-default btn-block" data-toggle="modal" data-target="#modalAgregarSucursal" id="prodClienteButton">Detalle</button></li><br>
              </ul>
              </td>';
              $cont++;
          }
          echo "</tr>";
              
        }
        /*foreach ($datoProductos as $dato) {
          echo '
            <tr>
              <td>
              <ul>
              <li>'.$dato["nombreProducto"].'</li>
              <li><img src="src/assets/productos/'.$dato["fotoProducto"].'" width="110px" height:"70px"></li>
              <li>'.$dato["precioProducto"].'</li>
              </ul>
                <button class="botonDetalle" data-toggle="modal" data-target="#modalAgregarSucursal">Dellate</button>

              </td>
            </tr>';
        }*/
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
      $('.idVerVendedor').hide()
      $('.imgDeletVendedor').hide()
      $('.idDeletVendedor').hide()
      //Se llama al id de la tabla
      $('#tablaVendedores').DataTable()
      //Carga las funciones de buscar y filtro con el id tablaVendedores2 que cambio para que lo reconozcan por ese id esas funciones.
      $('#tablaVendedores2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
</div>