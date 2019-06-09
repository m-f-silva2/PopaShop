<div class="content-wrapper">
    <div class="container" style="width: auto;">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <section class="content-header">
            
            <ol class="breadcrumb">
                <li><h3>Registrar vendedor</h3></li>
                <li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>
                <li class="active">Registrar vendedor</li>
            </ol>
            </section>
        </div>
    </div>
    <div class="row" id="row1">
        <div class="col-md-2"></div>
        <div class="col-md-7" style="background-color: #e0e3e7;margin-bottom: 15px;">
            <div class="modal-body" align="center">
                <form action="" method="post" name="frmRegistroVendedor" id="frmRegistroVendedor" enctype="multipart/form-data">
                    <div class="col-sm-4">
                        <!-- Profile Image -->
                          <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-circle" src="src/assets/monigotes/monigote-hombre-n.png" alt="avatar vendedor"><br>
                                <div align="left">
                                    <p class="col-sm-4">Cambiar: </p>
                                    <input type="file" class="col-sm-6" name="regImgArchivo"/>
                                </div>
                            </div>
                            <!-- /.box-body -->
                          </div>
                    </div>
                    <div class="col-md-4" align="left">
                        <!-- Campo de text: Tipo Documento. -->
                        <div class="form-group">
                            <label for="regTipoDocumento">Tipo de documento:</label>
                            <div class="input-group">
                                <select type="number" class="form-control" placeholder="Tipo de documento" name="regTipoDocumento" id="regTipoDocumento" required>
                              <option id="tipoDocumento"> Tipo de documento<?php
                              require_once "control/logica/TipoDocumentoGET.php";
                              $datoCategorias = Logica\TipoDocumentoGET::TraerTipo();
                              foreach ($datoCategorias as $dato1) {
                              echo "<option value='".$dato1["idTipoDocumento"]."'>".$dato1["tipoDeDocumento"]."</option>";
                              }
                              ?></option>
                           </select>
                            </div>
                        </div>
                        <!-- Campo de text: Numero Documento. -->
                        <div class="form-group">
                            <label for="regNumeroDocumento">Numero de documento:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Numero de documento" name="regNumeroDocumento" id="regNumeroDocumento" required>
                            </div>
                        </div>
                        <!-- Campo de text: Nombre1. -->
                        <div class="form-group">
                            <label for="regNombre1">Primer nombre:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Primer nombre" name="regNombre1" id="regNombre1" required>
                            </div>
                        </div>
                        <!-- Campo de text: Nombre2. -->
                        <div class="form-group">
                            <label for="regNombre2">Segundo nombre:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Segundo nombre" name="regNombre2" id="regNombre2">
                            </div>
                        </div>
                        <!-- Campo de text: Apellido. -->
                        <div class="form-group">
                            <label for="regApellido1">Primer apellido:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Primer apellido" name="regApellido1" id="regApellido1" required>
                            </div>
                        </div>
                        <!-- Campo de text: Apellido2. -->
                        <div class="form-group">
                            <label for="regApellido2">Segundo apellido:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Segundo apellido" name="regApellido2" id="regApellido2" required>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4" align="left">
                        <!-- Campo de text: Correo. -->
                        <div class="form-group">
                            <label for="regCorreo">Correo:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="correo" name="regCorreo" id="regCorreo" required>
                            </div>
                        </div>
                    
                        <!-- Campo de text: Numero Telefono. -->
                        <div class="form-group">
                            <label for="regTelefono">Telefono:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Numero de telefono" name="regTelefono" id="regTelefono" required>
                            </div>
                        </div>
                        <!-- Campo de text: Direccion. -->
                        <div class="form-group">
                            <label for="regDireccion">Direccion:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Direccion" name="regDireccion" id="regDireccion" required>
                            </div>
                        </div>
                    
                        <!-- Campo de text: Usuario. -->
                        <div class="form-group">
                            <label for="regUsuario">Usuario:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Usuario" name="regUsuario" id="regUsuario" required>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <!-- Campo de text: Contraseña. -->
                        <div class="form-group">
                            <label for="regContrasena">Contraseña:</label>
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Contraseña" name="regContrasena" id="regContrasena" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-footer " id="login-footerM">
                            <div align="center">
                                <button type="submit" class="btn btn-primary btn-block" value="guardarRegistrarVendedor">Guardar</button>
                                <?php 
                                if(@$_POST['regTipoDocumento'] != null && $_POST['regNumeroDocumento'] != null && $_POST['regNombre1'] != null && $_POST['regApellido1'] != null && $_POST['regApellido2'] != null && $_POST['regCorreo'] != null && $_POST['regTelefono'] != null && $_POST['regDireccion'] != null && $_POST['regUsuario'] != null && $_POST['regContrasena'] != null){
                                    @$datosRegistro = array(
                                        'tipoDocumento' => $_POST['regTipoDocumento'],
                                        'numeroDocumento' => $_POST['regNumeroDocumento'],
                                        'apellido1' => $_POST['regApellido1'],
                                        'apellido2' => $_POST['regApellido2'],
                                        'nombre1' => $_POST['regNombre1'],
                                        'nombre2' => $_POST['regNombre2'],
                                        'correo' => $_POST['regCorreo'],
                                        'telefono' => $_POST['regTelefono'],
                                        'direccion' => $_POST['regDireccion'],
                                        'usuario' => $_POST['regUsuario'],
                                        'contrasena' => $_POST['regContrasena'],
                                        'regImgArchivo' => $_FILES['regImgArchivo']
                                    );
                                    require_once "clases/class/Administrador.php";
                                    $metodo = 'agregarVendedor';
                                    $registro = new Clase\Administrador($datosRegistro,$metodo);
                                }
                                ?>
                            </div>
                        </div>
                        </div>
                </form>
            </div>
        </div><br>
    </div>
</div>