<div class="content-wrapper">
    <div class="container" style="width: auto;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <section class="content-header">            
            <ol class="breadcrumb">
                <li><h3>Administrar vendedores</h3></li>
                <li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active">Administrar vendedores</li>
            </ol>
            </section>
        </div>
    </div>

<div class="row" id="row1" align="center">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <table class="table table-bordered table-striped" id="tablaVendedores">
      <thead>
        <tr>
          <th>Documento</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        require_once "clases/class/Administrador.php";
        $datoProductos = Clase\Administrador::mostrarVendedores();
        foreach ($datoProductos as $dato) {
          echo '
            <tr>
              <td>'.$dato["documentoPersona"].'</td>
              <td>'.$dato["nombrePersona"].'</td>
              <td>'.$dato["apellidoPersona"].'</td>
              <td>'.$dato["correoPersona"].'</td>
              <td>'.$dato["telefonoPersona"].'</td>
              <td>'.$dato["direccionPersona"].'</td>
              <td>
                <form action="editVendedor" method="post" name="frmVerVendedor" id="frmVerVendedor">
                  <div class="form-group" id="divFrmVerVendedo">
                    <input type="number" id="idVerVendedor" name="idVerVendedor" class="idVerVendedor" value="'.$dato["idPersona"].'">
                    <button type="submit" value="editarVendedor" class="btn btn-app"><i class="fa fa-edit"></i></button>
                  </div>
                </form>
              </td>
              <td>
                <form action="" method="post" name="frmDelVendedor" id="frmDelVendedor">
                  <div class="form-group" id="divFrmDelVendedo">
                    <input type="number" id="idDeletVendedor" name="idDeletVendedor" class="idDeletVendedor" value="'.$dato["idPersona"].'">
                    <input type="text" id="imgDeletVendedor" name="imgDeletVendedor" class="imgDeletVendedor" value="'.$dato["avatarPersona"].'">
                    <button type="submit" value="deleteVendedor" id="deleteVendedor" name="deleteVendedor" class="btn btn-app"><i class="fa fa-remove"></i></button>';
                    if (@$_POST["deleteVendedor"]) {
                      @$datosRegistro = array(
                        'idDeletVendedor' => $_POST['idDeletVendedor'],
                        'imgDeletVendedor' => $_POST['imgDeletVendedor']);
                      $metodo = 'eliminarVendedor';
                      $registro = new Clase\Administrador($datosRegistro,$metodo);
                    }
                    echo '</div>
                </form>
              </td>
            </tr>
              '; 
        }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <th>Documento</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Editar</th>
          <th>Eliminar</th>
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