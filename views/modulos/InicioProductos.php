<form id="buscador" class="box" name="buscador" method="post" action="">
    <div class="container-1">
        <input id="search" name="buscar" type="search" placeholder="Buscar aquí..." autofocus>
        <input type="submit" name="buscador" class="botonBuscar" value="Buscar" onclick="return buscar()">
    </div>
</form><br><br>


<div class="row" id="row1">
    <div class="col-md-12" style="background-color: #eceff2">
        <div class="content-wrapper">
            <section class="content-header">

<div class="row" id="row1" align="center">
    <div class="col-md-12" style="background-color: #eceff2" align="center">
        <div class="content-wrapper"align="center">
        <section class="content-header" >
   
              <table class="table table-responsive table-hover" id="tablaProductos">
                  <thead style="background-color: #eceff2;">
                      <!--=====================================
        estilo de cajon productos
        ======================================-->
                     <style>
                .contenedorProductos{ margin: auto;width:220px;height: 220px;float: left;margin-right: 50px;margin-bottom: 20px;border: 1px solid #000; background-color: #FFFFFF}
                ul{list-style: none;margin: 0px; padding: 0px; }
                ul li{width: 150px; }
               .botonDetalle{background-color: #4CAF50; /* Green */border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none; display: inline-block;font-size: 16px;}
            </style>
            
                  
                  </thead>
                     <!--=====================================
       CATEGORIAS
        ======================================-->
                  <h3>Tienda Online</h3>
                  <br>
                  
                  <tbody id="tblCatego">
                  
                      <select style="width: 205px;" type="number" class="form-control" placeholder="Tipo Producto" name="tipoProducto" id="tipoProducto" >
                         
                          <option id="descripcionProducto" value="null">Filtrar:<?php 
                          require_once "control/logica/ProductosGet.php";
                          $datoCategorias = Logica\ProductosGet::categorias();
                          foreach ($datoCategorias as $dato1) {
                          $descripcion=$dato1["descripcionProducto"];
                           $idTipo=$dato1["idTipoProducto"];
                          echo "<option value='$idTipo'>".$descripcion."</option>";
                          }
                          ?></option>
                       </select>
                      <input  type="submit" onclick="return catego()"value="Enviar">
                      
                      <script>
                      function catego(){
                          <?php 
                            if(@$_POST['tipoProducto'] != null){

                <!--=====================================
                                CATEGORIAS
                ======================================-->

                
                <div class="categoriasbox" >
                    <h3>Tienda Online</h3>
                    <div class="filtrar">
                        <select type="number" class="form-control" placeholder="Tipo Producto" name="tipoProducto" id="tipoProducto">
                            <option id="descripcionProducto" value="null">Filtrar:<?php
                                                                                    require_once "control/logica/ProductosGet.php";
                                                                                    $datoCategorias = Logica\ProductosGet::categorias();
                                                                                    foreach ($datoCategorias as $dato1) {
                                                                                        $descripcion = $dato1["descripcionProducto"];
                                                                                        $idTipo = $dato1["idTipoProducto"];
                                                                                        echo "<option value='$idTipo'>" . $descripcion . "</option>";
                                                                                    }
                                                                                    ?></option>
                        </select>
                        <input class="aceptarCategoria" type="submit" onclick="return catego()" value="Enviar">
                        </div>   
                    <script>
                        function catego() {
                            <?php
                            if (@$_POST['tipoProducto'] != null) {

                                $datosRegistro = array(
                                    'tipoProducto' => $_POST['tipoProducto']
                                );

                                require "control/logica/ProductosGet.php";
                                $registro = new Logica\ProductosGet($datosRegistro);
                            }

                            ?>
                      alert("buscarCategoria");
                       <ul class="nav navbar-nav">
                          <li><a id="a"  href="InicioProductos">InicioProductos</a></li>
                          </ul>
                      }
                     
                      </script>
                         
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
                   
                  <tbody id="tblProductos" >
                    <?php 
                    require_once "control/logica/ProductosGet.php";
                    $datoProductos = Logica\ProductosGet::mostrarProductosPorCategoria();
                    foreach ($datoProductos as $dato) {
                        echo "
                            <div  class='contenedorProductos'>
                            <ul>
                            <li>".$dato["nombreProducto"]."</li>
                                <li><img src='src/assets/productos/".$dato["fotoProducto"]."' width='110px' height:'70px'></li>             
                                <li> $ ".$dato["precioProducto"]."</li>
                                    <button class='botonDetalle' data-toggle='modal' data-target='#detalle-modal' value='return enviar()'>Dellate</button>
                             
                        
                          </ul>
                             
                          </div>  "; }
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