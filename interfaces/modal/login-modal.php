<div id="modalAgregarSucursal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
            <div class="modal-header" style="background:#3c8dbc; color:white">
                <div align="center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Iniciar Sesion</h4>
                </div>
            </div>
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
            <div class="modal-body" align="center">
                <div class="form-group">
                    <button id="iniciarAcc_btn" name="iniciarAcc_btn">INICIAR</button>
                    <button id="registrarseAcc_btn" name="registrarseAcc_btn">REGISTRARSE</button>
                </div>
                <form action="" method="post" name="frmLogin" id="frmLogin">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Usuario" name="logUsuario" id="logUsuario" required>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Contraseña" name="logPassword" id="logPassword" required>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="modal-footer " id="login-footerM">
                        <div align="center">
                            <button type="submit" value="iniciar">INICIAR</button>
                            <?php 
                            if (isset($_POST["logUsuario"]) && isset($_POST["logPassword"])) {
                                require "control/logica/LogicaLogin.php";
                                $login = new Logica\Login($_POST["logUsuario"],$_POST["logPassword"]);
                            }
                            ?>
                        </div>
                    </div>
                </form>
                <form method="post" name="frmRegistro" id="frmRegistro">
                    <h3>Registrarse</h3>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="nombres" name="regNombre" id="regNombre">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="apellidos" name="regApellido" id="regApellido">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="correo" name="regCorreo" id="logCorreo">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Contraseña" name="regPassword" id="regPassword">
                            <span class="icon-bar"></span>
                        </div>
                    </div>
                    <div class="modal-footer " id="login-footerM">
                        <div align="center">
                            <button type="submit" value="registrarse">REGISTRARSE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- END DE MODAL -->
  <script>
    //btns cambiar a iniciar o registrarse
    iniciarAcc_btn.addEventListener("click", cambiarIniciar);
    registrarseAcc_btn.addEventListener("click", cambiarRegistrarse);

    function cambiarIniciar(){
        document.getElementById("frmLogin").style.display = "grid"
        document.getElementById("frmRegistro").style.display = "none"
        iniciarAcc_btn.style.backgroundColor = "#055456"
        iniciarAcc_btn.style.color = "#FFFFFF"
        //opacar
        registrarseAcc_btn.style.backgroundColor = "#214242"
        registrarseAcc_btn.style.color = "#f0f0f0"
    }
    function cambiarRegistrarse(){
        document.getElementById("frmRegistro").style.display = "grid"
        document.getElementById("frmLogin").style.display = "none"
        registrarseAcc_btn.style.backgroundColor = "#055456"
        registrarseAcc_btn.style.color = "#FFFFFF"
        //opacar
        iniciarAcc_btn.style.backgroundColor = "#214242"
        iniciarAcc_btn.style.color = "#f0f0f0"
    }
    cambiarIniciar();
</script>