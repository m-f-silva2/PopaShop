<br><br><br>
<div   align="center" id="Perfil">
    <div  style="background-color: #eceff2" align="center">
        <div align="center">
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