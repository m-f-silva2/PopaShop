<div class="content-wrapper">
    <div class="container" style="width: auto;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <section class="content-header">
            <h3>Registrar vendedor</h3>
            <ol class="breadcrumb">
                <li><a href="inicio-admin"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active">Registrar vendedor</li>
            </ol>
            </section>
        </div>
    </div>
    <div class="row" id="row1">
        <div class="col-md-2"></div>
        <div class="col-md-7">
            <div class="modal-body" align="center">
                <form action="" method="post" name="frmRegistroVendedor" id="frmRegistroVendedor">

                    <div class="col-md-3">
                        <!-- Campo de text: Tipo Documento. -->
                        <div class="form-group">
                            <div class="input-group">
                                <select type="number" class="form-control" placeholder="Tipo de documento" name="regTipoDocumento" id="regTipoDocumento" >
                             
                              <option id="descripcionProducto" value="null">Tipo De Documento<?php 
                              require_once "control/logica/TipoDocumentoGET.php";
                              $datoCategorias = Logica\TipoDocumentoGET::TraerTipo();
                              foreach ($datoCategorias as $dato1) {
                              $descripcion=$dato1["tipoDeDocumento"];
                              $idTipo=$dato1["idTipoDocumento"];
                              echo "<option value='$idTipo'>".$descripcion."</option>";
                              }
                              ?></option>
                           </select>
                                
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
                        <!-- Campo de text: Nombre 1. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Primer nombre" name="regNombre1" id="regNombre1">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <!-- Campo de text: Nombre 2. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Segundo nombre" name="regNombre2" id="regNombre2">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <!-- Campo de text: Apellido 1. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Primer apellido" name="regApellido1" id="regApellido1">
                                <span class="icon-bar"></span>
                            </div>
                        </div>
                        <!-- Campo de text: Apellido 2. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Segundo apellido" name="regApellido2" id="regApellido2">
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
                    </div>
                    <div class="col-md-3">
                        <!-- Campo de text: Usuario. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Usuario" name="regUsuario" id="regUsuario">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <!-- Campo de text: Contraseña. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Contraseña" name="regContrasena" id="regContrasena">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <div class="modal-footer " id="login-footerM">
                            <div align="center">
                                <button type="submit" value="registrarse">REGISTRARSE</button>
                                <?php 
                                if(@$_POST['regTipoDocumento'] != null && $_POST['regNumeroDocumento'] != null && $_POST['regNombre1'] != null && $_POST['regApellido1'] != null && $_POST['regApellido2'] != null && $_POST['regCorreo'] != null && $_POST['regTelefono'] != null && $_POST['regDireccion'] != null && $_POST['regUsuario'] != null && $_POST['regContrasena'] != null){

                                $datosRegistro = array(
                                        'tipoDocumento' => $_POST['regTipoDocumento'],
                                        'numeroDocumento' => $_POST['regNumeroDocumento'],
                                        'nombre1' => $_POST['regNombre1'],
                                        'apellido1' => $_POST['regApellido1'],
                                        'nombre2' => $_POST['regNombre2'],
                                        'apellido2' => $_POST['regApellido2'],
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>