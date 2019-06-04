<div class="row" id="row1" align="center">
    <div class="col-md-12">
        <div class="content-wrapper">
        <section class="content-header">
   
              <table class="table table-responsive table-hover" id="tablaProductos">
                  <thead style="background-color: #eceff2;">
                      <!--=====================================
        estilo de cajon productos
        ======================================-->
                     <style>
                .contenedorProductos{margin: auto;width:250px;height: 250px;float: left;margin-right: 50px;margin-bottom: 20px;border: 1px solid #000;}
                ul{list-style: none;margin: 0px; padding: 0px;}
                ul li{width: 150px; }
            </style>
            
                  
                  </thead>
                     <!--=====================================
       CATEGORIAS
        ======================================-->
                  <h3>Tienda Online</h3>
                  <br>
                  <tbody id="tblCatego">
                    <?php 
                    require_once "control/logica/ProductosGet.php";
                    $datoCategorias = Logica\ProductosGet::categorias();
                    
                   foreach ($datoCategorias as $dato1) {
                    $descripcion=$dato1["descripcionProducto"];
                   
                       echo "<select name='Categorias' id='logSelect'> "
                    . "<option>".$descripcion."</option>
                       </select>";}?>               
                  </tbody>
                  <br>
                  </table>
                  <table class="table table-responsive table-hover" id="tablaProductos">
                         <!--=====================================
        BUSCADOR
        ======================================-->
                      <form id="buscador" name="buscador" method="post" action=""> 
                          <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
                          <input type="submit" name="buscador" class="boton peque aceptar" value="buscar" onclick="return buscar()">  
                      </form><br><br>
                      
                      <!--=====================================
        tabla de productos
        ======================================-->
                     
                  <tbody id="tblProductos">
                    <?php 
                    require_once "control/logica/ProductosGet.php";
                    $datoProductos = Logica\ProductosGet::mostrarProductos();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div  class='contenedorProductos'>
                            <ul>
                            <li>".$dato["nombreProducto"]."</li>
                                <li><img src='src/assets/productos/".$dato["fotoProducto"]."' width='120px' height:'80px'></li>             
                                <li> $ ".$dato["precioProducto"]."</li>
                                    
                                 
                            </ul>
                            <button type='submit'  value='enviar' onclick='return enviar()'>DETALLE</button>
                            
                          <script>
                          function enviar(){
                     
                          alert('Detalle');
                          
                      }</script>
                            </div>"; }
                    ?>
                  
                  
                  </tbody>
                  
                  </table>
                  
              
            
            
          
        </section>
        <section class="content">
          <div class="error-page">
           
            <div class="error-content">
              
              
            </div>
          </div>  
        </section>
      </div>
    </div>
</div>