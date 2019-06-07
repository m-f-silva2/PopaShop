<link type="text/css" rel="stylesheet" href="src/css/inicioProductos.css">
    <!-- =====================================
                    BUSCADOR
    ======================================-->
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

                            /* <ul class = "nav navbar-nav">
                                <li > < a id = "a" href = "InicioProductos" > InicioProductos < /a></li >
                                </ul> */
                        }
                    </script>
                </div>
                
                
                <!--=====================================
                            tabla de productos
                ======================================-->
                <div class="contenedorProductos">
                  
                        <div class="tablaProductos">
                            <?php
                            require_once "control/logica/ProductosGet.php";
                            $datoProductos = Logica\ProductosGet::mostrarProductosPorCategoria();
                            foreach ($datoProductos as $dato) {
                                echo "
                                    <div class='ul'>
                                        <div class='li'>" . $dato["nombreProducto"] . "</div>
                                        <div class='li'><img src='src/assets/productos/" . $dato["fotoProducto"] . "'></div>  
                                        <div class='li' class='dinerito'> $ " . $dato["precioProducto"] . "</div>
                                        <div class='li' id='buttonLi'>
                                            <a id='buttonA'>
                                                <button class='botonDetalle'data-toggle='modal' data-target='#detalle-modal'>
                                                    Dellate
                                                </button>
                                            </a>
                                        </div>
                                    </div>";
                            }
                            echo "<!--<script>
                                    function enviar(){
                                    alert('Detalle');
                                    }
                                </script> -->"
                            ?>
                        </div>
                    
                </div>


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