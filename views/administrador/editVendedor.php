<?php  
if ($_POST["idVerVendedor"]) {
    require_once "clases/class/Administrador.php";
    $metodo = 'getVendedor';
    $reg = Clase\Administrador::getVendedor($_POST["idVerVendedor"],$metodo);
}
?>
<div class="content-wrapper">
    <div class="container" style="width: auto;">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <section class="content-header">
            
            <ol class="breadcrumb">
                <li><h3>Editar vendedor</h3></li>
                <li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>
                <li><a href="administrarVendedores">Administrar Vendedores</a></li>
                <li class="active">Editar vendedor</li>
            </ol>
            </section>
        </div>
    </div>
    <div class="row" id="row1">
        <div class="col-md-2">
        </div>
        <div class="col-md-7" style="background-color: #e0e3e7;margin-bottom: 15px;">
            <div class="modal-body" align="center">
                <form action="" method="post" name="frmRegistroVendedor" id="frmRegistroVendedor" enctype="multipart/form-data">
                    <div class="col-md-4">
                        <!-- Profile Image -->
                          <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img class="profile-user-img img-responsive img-circle" src="src/assets/monigotes/<?php echo $reg[0]["avatarPersona"];?>" alt="avatar vendedor">
                                <h3 class="profile-username text-center"><?php echo $reg[0]["nombrePersona"]." ".$reg[0]["apellidoPersona"];?></h3>
                                <p class="text-muted text-center">Vendedor</p>
                                <div align="left">
                                    <p class="col-sm-4">Cambiar: </p>
                                    <input type="file" name="regImgArchivo"/>
                                </div>
                            </div>
                            <!-- /.box-body -->
                          </div>
                    </div>
                    <div class="col-md-3">
                        <!-- Campo de text: Tipo Documento. -->
                        <div class="form-group">
                            <div class="input-group">
                                <select type="number" class="form-control" placeholder="Tipo de documento" name="regTipoDocumento" id="regTipoDocumento" >
                              <option id="descripcionProducto" value="<?php echo $reg[0]["idTipoDocumento"];?>"><?php echo $reg[0]["tipoDeDocumento"];?> <?php
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
                            <div class="input-group">

                                <input type="number" class="form-control" placeholder="Numero de documento" name="regNumeroDocumento" id="regNumeroDocumento" value="<?php echo $reg[0]["documentoPersona"];?>">
                            </div>
                        </div>
                        <!-- Campo de text: Nombre. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nombres" name="regNombre" id="regNombre" value="<?php echo $reg[0]["nombrePersona"];?>">
                            </div>
                        </div>
                        <!-- Campo de text: Apellido. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Apellidos" name="regApellido" id="regApellido" value="<?php echo $reg[0]["apellidoPersona"];?>">
                                
                            </div>
                        </div>
                        <!-- Campo de text: Correo. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="correo" name="regCorreo" id="regCorreo" value="<?php echo $reg[0]["correoPersona"];?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- Campo de text: Numero Telefono. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Numero de telefono" name="regTelefono" id="regTelefono" value="<?php echo $reg[0]["telefonoPersona"];?>">
                            </div>
                        </div>
                        <!-- Campo de text: Direccion. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Direccion" name="regDireccion" id="regDireccion" value="<?php echo $reg[0]["direccionPersona"];?>">
                            </div>
                        </div>
                    
                        <!-- Campo de text: Usuario. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Usuario" name="regUsuario" id="regUsuario" value="<?php echo $reg[0]["login"];?>">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            </div>
                        </div>
                        <!-- Campo de text: Contraseña. -->
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" placeholder="Contraseña" name="regContrasena" id="regContrasena">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-footer " id="login-footerM">
                            <div align="center">
                                <button type="submit" class="btn btn-primary btn-block" value="guardarEditarVendedor">Guardar</button>
                                <?php 
                                if ($_POST) {
                                    @$datosRegistro = array(
                                        'tipoDocumento' => $_POST['regTipoDocumento'],
                                        'numeroDocumento' => $_POST['regNumeroDocumento'],
                                        'apellido' => $_POST['regApellido'],
                                        'nombre' => $_POST['regNombre'],
                                        'correo' => $_POST['regCorreo'],
                                        'telefono' => $_POST['regTelefono'],
                                        'direccion' => $_POST['regDireccion'],
                                        'usuario' => $_POST['regUsuario'],
                                        'contrasena' => $_POST['regContrasena'],
                                        'regImgArchivo' => $_FILES['regImgArchivo']
                                    );
                                    $metodo = 'editarVendedor';
                                    @$registro = new Clase\Administrador($datosRegistro,$metodo);
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