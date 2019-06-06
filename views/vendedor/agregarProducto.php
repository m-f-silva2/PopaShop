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
                            <button onclick="return registrar()">Guardar</button>
                            <script>
                              
                            function registrar(){
                               
                                    <?php 
                                    
                            if(@$_POST['tipoProducto'] != null && $_POST['nombreProducto'] != null && $_POST['precioProducto'] != null && $_POST['cantidadProducto'] != null && $_POST['fotoProducto'] != null){
                            
                            $datosProducto = array(
                                    'tipoProducto' => $_POST['tipoProducto'],
                                    'nombreProducto' => $_POST['nombreProducto'],
                                    'precioProducto' => $_POST['precioProducto'],
                                    'cantidadProducto' => $_POST['cantidadProducto'],
                                    'fotoProducto' => $_POST['fotoProducto']
                                );
                            require "control/logica/ProductoRegistrer.php";
                            $registro = new Logica\RegistroProducto($datosProducto);
                            }  
                            
                            ?>
                                     
                          <ul class="nav navbar-nav">
                          <li><a id="a"  href="agregarProducto">Agregar Producto</a></li>
                          </ul>
                            }
                            </script>
                        </div>
                    </div>
                    <h3>Mis Productos</h3>
                    
                </form>
            </div>
        </div>
        </div><br>
    </div>
</div>