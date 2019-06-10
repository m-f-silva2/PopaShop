<div id="editar-perfil-modal" class="modal fade" role="dialog" align="center">
  <div class="modal-dialog" align="center">
        <div class="modal-content">
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
            <div class="modal-header" style="background:#3c8dbc; color:white">
                <div align="center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button></div>
                                          <!--=====================================
        estilo de cajon productos
        ======================================-->
                     <style>
                .contenedorProductos2{width:220px;height: 220px;margin-left: 65px; float: left; background-color: #000\9;}
                ul{list-style: none;margin: 0px; padding: 0px; }
                ul li{width: 150px; }   
                .contenedorProductos1{float: left; background-color: #000\9; margin-left: 15px;}
                ul{list-style: none;margin: 0px; padding: 0px; }
                ul li{width: 210px; }  
            </style>
                    <h4 class="modal-title">Mis Datos</h4>
                </div>
                <div class="modal-body">
                    <form>
                    <!--=====================================
       Imagen detalle
        ======================================-->
                    <tbody id="tblProductos" >
                    <?php require_once "control/logica/PerfilLogica.php";
                    $datoProductos = Logica\PerfilLogica::getDato();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div  class='contenedorProductos'>
                            <ul>
                            <li><img src='src/assets/monigotes/".$dato["avatarPersona"]."' class='profile-user-img img-responsive img-circle' width='100px'></li>     
                            <br><li>Nombre: ".$dato["nombrePersona"]." ".$dato["apellidoPersona"]."</li>
                                <br><li> Usuario: ".$dato["login"]."</li>
                                       <br>"; }?>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Correo electronico" name="correoPersona" id="correoPersona">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Telefono" name="telefonoPersona" id="telefonoPersona">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Direccion" name="direccionPersona" id="direccionPersona">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Contraseña" name="password" id="passwrod">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                    </div>
                    
                    </tbody>
                     </form>
                </div>
                
            </div>
        </div></div></div>
  <!-- END DE MODAL -->
  