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
        include_once 'clases/patron/iterator/AgregadoProductos.php';
        include_once 'clases/class/Producto.php';
          $agregadoProductos = array();
          $iterator;
          $productos;
          $v_idUsuario = $_SESSION["idUsuario"];
          $datoProductos = Logica\ProductosGet::productoPorVendedor($v_idUsuario);
          $cont = 0;
               $agregadoProductos = new \Iterator\AgregadoProductos();
                foreach ($datoProductos as $dato1) {
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
          $fila = count($datoProductos);
          $cont = 0;
          while ($iterator->hayMas() == true) {
            $siguiente = @$iterator->siguiente();
            if ($cont == 0) {
                echo "<tr>";
              }
              $cont++;
              if($fila > 0){
                $fila = $fila-1;
              echo "
              <td style='border: 0px solid transparent;' align='center'>
              <ul id='prodCliente'>
              <li>".@$siguiente->getNombreProducto()."
              </li>
              <li><img src='src/assets/productos/".$siguiente->getFotoProducto()."' width='110px' class='profile-user-img img-responsive img-circle'></li>
              <li>".$siguiente->getPrecioProducto()."</li>
              <li><button class='botonDetalle' id='detailProducto' data-toggle='modal' data-target='#detalle-modal-cliente' value='".$siguiente->getIdProducto()."'>Detalle</button></li><br>
              <li></li>              
              </ul>
              </td>";
            }
            if($iterator->hayMas() == false ){
              if ((3 - $cont) == 2) {
                echo "<td></td><td></td>";
              }else{
                echo "<td></td>";
              }
            }
              if ($cont == 3) {
                $cont = 0;
                echo "</tr>";
              }
          }
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