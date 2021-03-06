<!DOCTYPE html>
<html>
<head>
    <meta content="text/html" charset="utf-8"/>
    <meta name="keywords" content="PopaShop"/>
    <meta name="description" content="Tienda Online"/>
    <link type="text/css" rel="stylesheet" href="src/css/normalize.css"/>
    <link type="text/css" rel="stylesheet" href="src/bootstrap/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="src/css/template.css"/>
    <link type="text/css" rel="stylesheet" href="src/datatables.net-bs/dataTables.bootstrap.min.css"/>
    <!-- Font awesome -->
    <link rel="stylesheet" href="src/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="src/Ionicons/css/ionicons.min.css">
    <script src="src/bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="src/bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="src/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="src/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <title>PopaShop</title>
</head>
<body>
    <?php 
        session_start();
    ?>
    <header>
        <?php include_once "modulos/header.php";?>
    </header>

    <section>
        <?php

        $pegesArray = array("inicio-admin","inicio-cliente","inicio-vendedor","misProductos","ventas","login","agregarProducto","nosotros","contactenos","editVendedor","administrarVendedores","registrarVendedor","Compra");
        //Si no hay una ruta en la url se le asigna inicio.
        if(!isset($_GET["ruta"])){
            switch (@$_SESSION["rol"]) {
                case 'Administrador':
                    $ruta = 'administrador';
                    $_GET["ruta"] = 'inicio-admin';
                    break;
                case 'Vendedor':
                    $ruta = 'vendedor';
                    $_GET["ruta"] = 'inicio-vendedor';
                    break;
                case 'Cliente':
                    $ruta = 'cliente';
                    $_GET["ruta"] = 'inicio-cliente';
                    break;
                default:
                    $ruta = 'modulos';
                    $_GET["ruta"] = 'InicioProductos';
                    break;
            }
            //include_once "views/".$ruta."/".$_GET["ruta"].".php";
        }
        
        //Al dar click en un enlace, obtener validar get
        if(isset($_SESSION["rol"])){
            
            //Si existe el get[] en el array
            if (in_array($_GET["ruta"], $pegesArray)) {
                include $_SESSION["rol"]."/".$_GET["ruta"].".php";
            }
            //Si el get es igual a salir, se destruye la sesion creada
            else if($_GET["ruta"] == "salir"){
                session_destroy();
                header("Location: http://localhost/PopaShop/inicio");
            }else{
                //include include $_SESSION["isAdmin"]."/404.php";
                include_once "modulos/InicioProductos.php";
                
            }
        }else if (in_array($_GET["ruta"], $pegesArray)){
            switch ($_GET["ruta"]) {
                case 'inicio-cliente':
                    include_once "cliente/".$_GET["ruta"].".php";
                    break;
                default:
                    include_once "modulos/".$_GET["ruta"].".php";
                    break;
            }
        }else{
            include_once "modulos/InicioProductos.php";
        }
        include_once "modal/perfil-modal.php";
        include_once "modal/login-modal.php";
        include_once "modal/detalle-modal.php";
        include_once "modal/detalle-modal-cliente.php";
        include_once "modal/editar-perfil-modal.php";
        include_once "modal/Cargando.php";
        ?>
    </section>

    <footer>
        <?php 
        
            include_once ('modulos/footer.php');
        
        ?>
    </footer>
</body>
</html>