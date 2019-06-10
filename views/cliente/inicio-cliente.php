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
				   //print_r($datoCategorias);
				    foreach ($datoCategorias as $dato1) {
				      $productos= new \clase\Producto();
				      $productos->setIdProducto($dato1["idProducto"]);
				      $productos->setIdTipoProducto($dato1["idTipoProducto"]);
				      $productos->setNombreProducto($dato1["nombreProducto"]);
				      $productos->setPrecioProducto($dato1["precioProducto"]);
				      $productos->setCantidadProducto($dato1["cantidadProducto"]);
				      $productos->setFotoProducto($dato1["fotoProducto"]);
				      $productos->setIdUsuario($dato1["idUsuario"]);
				      $agregadoProductos->agregar($productos);
				    }


          
			//Obtiene iterador Concreto
			$iterator = $agregadoProductos->crearIterator();
			//$fila = count($iterator);
			//echo $fila;
			//var_dump($fila);

			while ($iterator->hayMas()) {
			    $siguiente = $iterator->siguiente();
			  echo "
                                <div class='ul'>
                                
                                    <div class='li'>" .$siguiente->getNombreProducto() . "</div>
                                        <div class='li'><img src='src/assets/productos/" . $siguiente->getFotoProducto() . "'></div>
                                    <div class='li' class='dinerito'> $ " . $siguiente->getPrecioProducto() . "</div>
                                    <div class='li' id='buttonLi'>
                                        <a id='buttonA'>
                                            <button class='botonDetalle' id='detail' data-toggle='modal' data-target='#detalle-modal' value='".$siguiente->getIdProducto()."'>
                                                Detalle
                                            </button>
                                        </a>
                                    </div>
                                </div>";
                        }
                        echo '<script>
                            $(document).ready(function(){
                                    $(document).on("click", "#detail", function(){       
                            var id=$(this).val();
                            
                              $.post("views/modal/detalleProducto.php?v_idProductoCompra="+id, function(respuesta){
                                $("#contDetalleProducto1").html(respuesta);
                                $("#idCompraProducto").hide();
                            });
                            
                            
                          });
                          });</script>';
			?>
                        </div>
                    </form>
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