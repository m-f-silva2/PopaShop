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
                            <input type="number" class="form-control" placeholder="Tipo Producto" name="regTipoProducto" id="regTipoProducto">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Nombre Producto. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Nombre Producto" name="regNombreProducto" id="regNombreProducto">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Precio. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="decimal" class="form-control" placeholder="Precio Producto" name="regPrecioProducto" id="regPrecioProducto">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de number: cantidad. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Cantidad" name="regCantidad" id="regCantidad">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Foto. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Foto" name="regFoto" id="regFoto">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                   

                    <div class="modal-footer " id="login-footerM">
                        <div align="center">
                            <button type="submit" value="registrarse">REGISTRARSE</button>
                            <?php 
                            if(isset($_POST['regTipoProducto'])){

                                require "control/logica/LogicaRegistro.php";
                                $registro = new Logica\ProductoRegistro($_POST['regTipoProducto'],$_POST['regNombreProducto'],$_POST['regPrecioProducto'],$_POST['regCantidad'],$_POST['regFoto'],$_POST['regTelefono'],$_POST['regDireccion']);
                            }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
              
                <?php
                /*
                $datoProductos = Controller\ProductoController::ctrMostrarProducto();
                //var_dump($datoProductos);
                foreach ($datoProductos as $dato) {
                    echo '<div class="col-md-2" id="prodCliente">
                        <div  id="prodClienteDivImagen">
                            <img class="img-circle img-responsive" src="src/assets/productos/' . $dato["fotoProducto"].'" alt="imagen de '.$dato["nombreProducto"].'" id="prodClienteImagen">
                        </div>
                        <div>
                            <h3>'.$dato["nombreProducto"].'</h3>
                        </div>
                        <div>
                            <h4>$'.$dato["precioProducto"].'</h4>
                        </div>
                        <div>
                            
                        </div><br>
                        </div>';
                } */
                ?>
                
            
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