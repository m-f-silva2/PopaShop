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
    <table id="example1" class="table table-bordered table-striped" id="tablaVendedores" align="center" >
      <thead>
        <tr>
          <th>Documento</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Direccion</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        require_once "control/logica/AdministrarVendedoresLogica.php";
        $datoProductos = Logica\AdminVendedor::mostrarVendedores();
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
          <th>Accion</th>
        </tr>
      </tfoot>
    </table>
  </div>
  <script>
    $(function () {
      $('.idVerVendedor').hide();
      $('#example2').DataTable({
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