<?php  
if (isset($_REQUEST["idProducto"])) {
	require_once "../../control/logica/ProductosGet.php";
                    $datoProductos = Logica\ProductosGet::productoDetalle($_REQUEST["idProducto"]);
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div class='contenedorProductos1' >
                            <ul>
                           
                                <li><img src='src/assets/productos/".$dato["fotoProducto"]."' ></li>             
                                
                          </ul>
                          </div>
                          <div class='contenedorProductos2'>
                          <ul> <li>".$dato["nombreProducto"]."</li>
                              <li> $ ".$dato["precioProducto"]."</li></ul>

                        "; }//La etiqueta <div class='contenedorProductos2'> cierra en el modal.
}
?>