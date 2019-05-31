<div class="row" id="row1">
    <div class="col-md-12">
           
              <h4>Productos</h4>
                  <div class="modal-body" align="center">
                <div class="form-group">
                    
                    <button id="registrarseAcc_btn"  name="registrarseAcc_btn">REGISTRAR PRODUCTO</button>
                </div>
               
                <form action="" method="post" name="frmRegistro" id="frmRegistro">
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
                            if($_POST['tipoProducto'] != null && $_POST['nombreProducto'] != null && $_POST['precioProducto'] != null && $_POST['cantidadProducto'] != null){
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
         <script>

    function cambiarRegistrarse(){
        document.getElementById("frmRegistro").style.display = "grid"
        document.getElementById("frmLogin").style.display = "none"
        registrarseAcc_btn.style.backgroundColor = "#055456"
        registrarseAcc_btn.style.color = "#FFFFFF"
        //opacar
        iniciarAcc_btn.style.backgroundColor = "#214242"
        iniciarAcc_btn.style.color = "#f0f0f0"
    }
    cambiarRegistrarse();
</script>
    </div>
</div>