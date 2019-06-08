<div id="perfil-modal" class="modal fade" role="dialog" align="center">
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
                  
                    <!--=====================================
       Imagen detalle
        ======================================-->
                    <tbody id="tblProductos" >
                    <?php               require_once "control/logica/PerfilLogica.php";
                    $datoProductos = Logica\PerfilLogica::getDato();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div  class='contenedorProductos'>
                            <ul>
                            <li><img style=' width: 100px; height: 100px;' src='src/assets/monigotes/".$dato["avatarPersona"]."' ></li>     
                            <br><li>Nombre: ".$dato["nombrePersona"]." ".$dato["apellidoPersona"]."</li>
                                <br><li>Correo: ".$dato["correoPersona"]."</li>
                                <br><li> Telefono ".$dato["telefonoPersona"]."</li>
                                    <br><li>Direccion: ".$dato["direccionPersona"]."</li>
                                        <br><li> Usuario: ".$dato["login"]."</li>
                                            <br><li> Contraseña: ********* </li>
                           </ul>
                             
                          </div>  "; }?>
                   <li id="buttonLi"><a id="buttonA"><button class="close" data-toggle="modal" data-target="#editar-perfil-modal" data-dismiss="modal">EDITAR</button></a>
                    
                    </tbody>
                     
                </div>
                
            </div>
        </div></div></div>
  <!-- END DE MODAL -->
  