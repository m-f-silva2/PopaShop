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
</div>
  </div>
<div class="row" id="row1">
    <div class="col-md-12">

                  <div class="modal-body" align="center">
               
                <form action="" method="post" name="frmRegistroProducto" enctype="multipart/form-data">
                    <h3>Registrar Producto</h3>
                    <!-- Campo de text: Tipo Producto. -->
                    <div class="form-group">
                      <label>Tipo:</label>
                        <div class="input-group">
                            <select type="number" class="form-control" placeholder="Tipo Producto" name="tipoProducto" id="tipoProducto" >
                         
                          <option id="descripcionProducto" value="null">Elija una opción<?php 
                          require_once "control/logica/ProductosGet.php";
                          $datoCategorias = Logica\ProductosGet::categorias();
                          foreach ($datoCategorias as $dato1) {
                          $descripcion=$dato1["descripcionProducto"];
                          $idTipo=$dato1["idTipoProducto"];
                          echo "<option value='$idTipo'>".$descripcion."</option>";
                          }
                          ?></option>
                       </select>
                            
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Nombre Producto. -->
                    <div class="form-group">
                      <label>Nombre:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nombre Producto" name="nombreProducto" id="nombreProducto">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Precio. -->
                    <div class="form-group">
                      <label>Precio</label>
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Precio Producto" name="precioProducto" id="precioProducto">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de number: cantidad. -->
                    <div class="form-group">
                      <label>Cantidad</label>
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Cantidad" name="cantidadProducto" id="cantidadProducto">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Foto. -->
                    <div class="form-group">
                      <label>Foto</label>
                        <div class="input-group">
                            <input type="file" name="vendImgArchivo" />
                        </div>
                    </div>
                   

                    <div class="modal-footer " id="login-footerM">
                        <div align="center">
                            <button type="submit">Guardar</button>
                               
                                    <?php 
                                    
                            if(@$_POST['tipoProducto'] != null && $_POST['nombreProducto'] != null && $_POST['precioProducto'] != null && $_POST['cantidadProducto'] != null && $_FILES['vendImgArchivo'] != null){
                            
                            $datosProducto = array(
                                    'tipoProducto' => $_POST['tipoProducto'],
                                    'nombreProducto' => $_POST['nombreProducto'],
                                    'precioProducto' => $_POST['precioProducto'],
                                    'cantidadProducto' => $_POST['cantidadProducto'],
                                    'fotoProducto' => $_FILES['vendImgArchivo']
                                );
                            //var_dump($datosProducto);
                            require "control/logica/ProductoRegistrer.php";
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