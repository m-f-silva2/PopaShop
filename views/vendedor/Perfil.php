<br><br><br>
<div  id="" align="center" id="Perfil">
    <div class="col-md-12" style="background-color: #eceff2" align="center">
        <div class="content-wrapper"align="center">
<?php               require_once "control/logica/PerfilLogica.php";
                    $datoProductos = Logica\PerfilLogica::getDato();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div  class='contenedorProductos'>
                            <ul>
                            <li>".$dato["nombrePersona"]."</li>
                           </ul>
                             
                          </div>  "; }
                    
?>
</div></div></div>