<div class="modal-body" align="center">
                <div class="form-group">
                    
                    <button id="registrarseAcc_btn" name="registrarseAcc_btn">REGISTRARSE</button>
                </div>
                
                <form action="" method="post" name="frmRegistro" id="frmRegistro">
                    <h3>Registrarse</h3>
                       <!-- Campo de text: Tipo Documento. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Tipo de documento" name="regTipoDocumento" id="regTipoDocumento">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Numero Documento. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Numero de documento" name="regNumeroDocumento" id="regNumeroDocumento">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                 
                    
                    <!-- Campo de text: Nombres. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="nombres" name="regNombre" id="regNombre">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Apellidos. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="apellidos" name="regApellido" id="regApellido">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Correo. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="correo" name="regCorreo" id="regCorreo">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Numero Telefono. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Numero de telefono" name="regTelefono" id="regTelefono">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: Direccion. -->
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Direccion" name="regDireccion" id="regDireccion">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    
                    <!-- Campo de text: Usuario. -->
                    <div class="form-group" style="color: #a8ccec">
                        <div class="input-group" style="color: #a8ccec">
                            <input type="text" class="form-control" placeholder="Usuario" name="regUsuario" id="regUsuario">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- Campo de text: contraseña. -->
                    <div class="form-group" style="color: #a8ccec">
                        <div class="input-group" style="color: #a8ccec">
                            <input type="password" class="form-control" placeholder="Constraseña" name="regContrasena" id="regContrasena">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>

                    <div class="modal-footer " id="login-footerM">
                        <div align="center">
                            <button type="submit" value="registrarse">REGISTRARSE</button>
                            <?php 
                            if(@$_POST['regTipoDocumento'] != null && $_POST['regNumeroDocumento'] != null && $_POST['regNombre'] != null && $_POST['regApellido'] != null && $_POST['regCorreo'] != null && $_POST['regTelefono'] != null && $_POST['regDireccion'] != null&& $_POST['regUsuario'] != null&& $_POST['regContrasena'] != null){

                            $datosRegistro = array(
                                    'tipoDocumento' => $_POST['regTipoDocumento'],
                                    'numeroDocumento' => $_POST['regNumeroDocumento'],
                                    'nombre' => $_POST['regNombre'],
                                    'apellido' => $_POST['regApellido'],
                                    'correo' => $_POST['regCorreo'],
                                    'telefono' => $_POST['regTelefono'],
                                    'direccion' => $_POST['regDireccion'],
                                    'usuario' => $_POST['regUsuario'],
                                    'contrasena' => $_POST['regContrasena']
                                );

                                require "control/logica/registrarVendedor.php";
                                $registro = new Logica\RegistrarVendedor($datosRegistro);
                            }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    //btns cambiar a iniciar o registrarse
    
    registrarseAcc_btn.addEventListener("click", cambiarRegistrarVendedor);

   
    function cambiarRegistrarVendedor(){
        document.getElementById("frmRegistro").style.display = "grid"
        document.getElementById("frmLogin").style.display = "none"
        registrarseAcc_btn.style.backgroundColor = "#055456"
        registrarseAcc_btn.style.color = "#FFFFFF"
        //opacar
        iniciarAcc_btn.style.backgroundColor = "#214242"
        iniciarAcc_btn.style.color = "#f0f0f0"
    }
    cambiarRegistrarVendedor();
</script>
 