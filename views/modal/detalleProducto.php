<?php  
if (isset($_REQUEST["idProducto"])) {
	require_once "../../control/logica/ProductosGet.php";
  $datoProductos = Logica\ProductosGet::productoDetalle($_REQUEST["idProducto"]);
  foreach ($datoProductos as $dato) {
      echo "
          <div class='contenedorProductos1'>
          <ul>
              <li><img src='src/assets/productos/".$dato["fotoProducto"]."' class='profile-user-img img-responsive img-circle'></li>
          </ul>
          </div>
          <div class='contenedorProductos2'>
          <ul>
            <li>".$dato["nombreProducto"]."</li>
            <li> $ ".$dato["precioProducto"]."</li>
            <li><h3>Debes iniciar sesion para comprar.</h3></li>
          </ul>
      "; }//La etiqueta <div class='contenedorProductos2'> cierra en el modal.
}
if (isset($_REQUEST["v_idProductoCompra"])) {
  require_once "../../control/logica/ProductosGet.php";
  $datoProductos = Logica\ProductosGet::productoDetalle($_REQUEST["v_idProductoCompra"]);
  foreach ($datoProductos as $dato) {
      echo "
          <div class='contenedorProductos1' >
            <ul>
                <li><img src='src/assets/productos/".$dato["fotoProducto"]."' class='profile-user-img img-responsive img-circle'></li>
            </ul>
            </div>
            <div class='contenedorProductos2'>
            <ul>
              <li>".$dato["nombreProducto"]."</li>
              <li> $ ".$dato["precioProducto"]."</li>
            </ul>
          </div>
          <div align='center'>
          <form action='Compra' method='post' name='frmProducto' id='frmProducto'>
            <div class='form-group' id='divDetalleCompraProducto'>
              <input type='number' name='idCompraProducto' id='idCompraProducto' value='".$_REQUEST["v_idProductoCompra"]."' required>
            </div>
            <div class='modal-footer' id='login-footerM'>
                <div align='center'>
                    <button  type='submit' value='iniciar'>Comprar</button>
                </div>
            </div>
          </form>";
  }
}
?>