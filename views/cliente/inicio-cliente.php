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
                <div class="categoriasbox">
                    <h3>Tienda Online</h3>
                    <div class="filtrar">
                        <select type="number" class="form-control" placeholder="Tipo Producto" name="tipoProducto" id="tipoProducto">
                            <option id="descripcionProducto" value="null">
                                Filtrar:<?php
                                require_once "control/logica/ProductosGet.php";
                                $datoCategorias = Logica\ProductosGet::categorias();
                                foreach ($datoCategorias as $dato1) {
                                    $descripcion = $dato1["descripcionProducto"];
                                    $idTipo = $dato1["idTipoProducto"];
                                    echo "<option value='$idTipo'>" . $descripcion . "</option>";
                                }
                                ?>
                            </option>
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
                        }
                    </script>
                </div>
                <!--=====================================
                            tabla de productos
                ======================================-->
                <div class="contenedorProductos">
                    <div class="tablaProductos">
                         <?php 
        include_once 'clases/patron/iterator/AgregadoProductos.php';
        include_once 'clases/class/Producto.php';
          $agregadoProductos = array();
          $iterator;
          $productos;
                require_once 'control/logica/ProductosGet.php';
               $datoCategorias = \Logica\ProductosGet::mostrarProductosPorCategoria();
               $agregadoProductos = new \Iterator\AgregadoProductos();
                foreach ($datoCategorias as $dato1) {
                  $productos= new \clase\Producto();
                  $productos->setIdProducto($dato1["idProducto"]);
                  $productos->setIdTipoProducto($dato1["idTipoProducto"]);
                  $productos->setNombreProducto($dato1["nombreProducto"]);
                  $productos->setPrecioProducto($dato1["precioProducto"]);
                  $productos->setCantidadProducto($dato1["cantidadProducto"]);
                  $productos->setFotoProducto($dato1["fotoProducto"]);
                  $productos->setIdUsuario($dato1["idUsuario"]);
                  $agregadoProductos->agregar($productos->getNombreProducto());
                  $agregadoProductos->agregar($productos->getFotoProducto());
                  $agregadoProductos->agregar($productos->getPrecioProducto());
                  $agregadoProductos->agregar($productos->getIdProducto());
                }


          
          //Obtiene iterador Concreto
          $iterator = $agregadoProductos->crearIterator();
          //$fila = count($iterator);
          //echo $fila;
          //var_dump($fila);

          for ($i=0; $iterator->hayMas() == true; $i++) {
            echo "<tr>";

            for ($j=0; $j < 3; $j++) { 
            echo '
              <td style="border: 0px solid transparent;" align="center">
              <ul id="prodCliente">
              <li>';
              print $iterator->siguiente();
              echo '</li>
              <li><img src="src/assets/productos/';
              print $iterator->siguiente();
              echo '" width="110px" class="profile-user-img img-responsive img-circle"></li>
              <li>';
              print $iterator->siguiente();
              echo '</li>
              <li><button class="botonDetalle" id="detailProducto" data-toggle="modal" data-target="#detalle-modal-cliente" value="';
              print $iterator->siguiente();
              echo '">Detalle</button></li><br>
              <li></li>              
              </ul>
              </td>';
              //var_dump($iterator->siguiente());
            }
            echo "</tr>";
          }
          
          
        /*$cont = 0;
        for ($i=0; $cont < count($datoProductos) ; $i++) { 
            
          echo "<tr>";
          for ($j=0; $j < 4 && $cont < count($datoProductos); $j++) { 
            
            echo '
              <td style="border: 0px solid transparent;" align="center">
              <ul id="prodCliente">
              <li>'.$datoProductos[$cont]["nombreProducto"].'</li>
              <li><img src="src/assets/productos/'.$datoProductos[$cont]["fotoProducto"].'" width="110px" class="profile-user-img img-responsive img-circle"></li>
              <li>'.$datoProductos[$cont]["precioProducto"].'</li>
              <li><button class="botonDetalle" id="detailProducto" data-toggle="modal" data-target="#detalle-modal-cliente" value="'.$datoProductos[$cont]["idProducto"].'">Detalle</button></li><br>
              <li></li>              
</ul>
              </td>';
              $cont++;
          }
          echo "</tr>";
              
        }*/
        echo '<script>
        $(document).ready(function(){
          $(document).on("click", "#detailProducto", function(){       
            var id=$(this).val();
            $.post("views/modal/detalleProducto.php?idCompraProducto="+id, function(respuesta){
              $("#cliDetalleProducto").html(respuesta);
            });
          });
        });
        </script>';
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