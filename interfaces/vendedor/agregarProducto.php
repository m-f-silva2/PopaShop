<div class="content-wrapper">
    <div class="container" style="width: auto;">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <section class="content-header">
      <h3>
        Mis Productos
      </h3>
      <ol class="breadcrumb">
        <li><a href="inicio-vendedor"><i class="fa fa-home"></i> Inicio</a></li>
        <li class="active">Productos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" align="center">
        <div class="box box-primary">
            <div class="box-body">
            <table class="table table-responsive table-hover" id="tablaProductos">
                  <thead style="background-color: #eceff2;">
                    <th id="tablaProdTh">#</th>
                    <th id="tablaProdTh">Tipo de producto</th>
                    <th id="tablaProdTh">NombreProducto</th>
                    <th id="tablaProdTh">PrecioProducto</th>
                    <th id="tablaProdTh">Cantidad de producto</th>
                    <th id="tablaProdTh">Foto de Producto</th>
                  </thead>
                  <tbody id="tblProductos">
                    <?php 
                    require_once "control/logica/ProductosGet.php";
                    $datoProductos = Logica\ProductosGet::MostrarProductos();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <tr>
                                <th>".@++$con."</th>
                                <th>".$dato["idTipoProducto"]."</th>
                                <th>".$dato["nombreProducto"]."</th>
                                <th>".$dato["precioProducto"]."</th>
                                <th>".$dato["cantidadProducto"]."</th>
                                <th>".$dato["fotoProducto"]."</th>
                            </tr>";
                    }
                    ?>
                  </tbody>
              </table>
            
            <!-- /.box-header -->
            </div>
            <!-- /.box-body -->
          </div>
      </div>

    </section>
      </div>
  </div>
<div class="row" id="row1">
    <div class="col-md-12">


           
              <h4>Productos</h4>
                  <div class="modal-body" align="center">
               
                <form action="" method="post" name="frmRegistroProducto" >
                    <h3>Registrar Producto</h3>
                    <!-- Campo de text: Tipo Producto. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Tipo Producto" name="tipoProducto" id="tipoProducto">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Nombre Producto. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nombre Producto" name="nombreProducto" id="nombreProducto">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Precio. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="decimal" class="form-control" placeholder="Precio Producto" name="precioProducto" id="precioProducto">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de number: cantidad. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Cantidad" name="cantidadProducto" id="cantidadProducto">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Foto. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Foto" name="fotoProducto" id="fotoProducto">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                   

                    <div class="modal-footer " id="login-footerM">
                        <div align="center">
                            <button type="submit" value="enviar">Guardar</button>
                            <?php 
                            if(@$_POST['tipoProducto'] != null && $_POST['nombreProducto'] != null && $_POST['precioProducto'] != null && $_POST['cantidadProducto'] != null){
                            require "control/logica/ProductoRegistrer.php";
                            $datosProducto = array(
                                    'tipoProducto' => $_POST['tipoProducto'],
                                    'nombreProducto' => $_POST['nombreProducto'],
                                    'precioProducto' => $_POST['precioProducto'],
                                    'cantidadProducto' => $_POST['cantidadProducto'],
                                    'fotoProducto' => $_POST['fotoProducto']
                                );
                            $registro = new Logica\RegistroProducto($datosProducto);
                            }                            
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div><br>
    </div>
</div>