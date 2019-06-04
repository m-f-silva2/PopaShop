<div class="row" id="rowHeader">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-brand hidden-xs">
                <img src="src/assets/logo/logo2.png" alt="logo Popashop" id="imgPopashop">
            </div>
            <div class="navbar-header">    
                <button id="BotonMenu" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>    
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <?php 
                @$rolHeader = $_SESSION["rol"];
                switch ($rolHeader) {
                    case 'Administrador':
                        echo '
                        <ul class="nav navbar-nav">
                            <li><a id="a"  href="administrarVendedores">Administrar Vendedores</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li><a id="a"  href="registrarVendedor">Registrar Vendedor</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a id="a" href="salir"><span class="glyphicon glyphicon-user"></span> Salir</a></li>
                        </ul>
                        ';
                        break;
                    case 'Vendedor':
                        echo '
                            <ul class="nav navbar-nav">
                                <li><a id="a"  href="inicio-vendedor">Inicio</a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li><a id="a"  href="ventas">Mis ventas</a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li><a id="a" href="agregarProducto">Mis Productos</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a id="a" href="#"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                                <li><a id="a" href="salir"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                            </ul>
                        ';
                        break;
                    case 'Cliente':
                        echo '
                            <ul class="nav navbar-nav">
                                <li><a id="a"  href="inicio">Inicio</a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li><a id="a"  href="nosotros">Nosotros</a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li><a id="a"  href="contactenos">Contactenos</a></li>
                            </ul>
                             <ul class="nav navbar-nav">
                                <li><a id="a"  href="Compra">Compra</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a id="a" href="#"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                                <li><a id="a" href="salir"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
                            </ul>
                        ';
                        break;
                    default:
                        echo ' 
                            <ul class="nav navbar-nav">
                                <li><a id="a"  href="inicio">Inicio</a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li><a id="a"  href="nosotros">Nosotros</a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li><a id="a"  href="contactenos">Contactenos</a></li>
                            </ul>
                            
                            <ul class="nav navbar-nav">
                                <li id="buttonLi"><a id="buttonA"><button data-toggle="modal" data-target="#modalAgregarSucursal" id="buttonLogin">Login</button></a>
                                </li>
                            </ul>
                        ';
                        break;
                        /*<ul class="nav navbar-nav">
                                <li id="buttonLi">
                                <a id="buttonA">
                                <button data-toggle="modal" data-target="#modalAgregarSucursal" id="buttonLogin">Login</button>
                                </a></li>
                            </ul>*/
                }
                 ?>
            </div>
        </div>
    </nav>
</div>