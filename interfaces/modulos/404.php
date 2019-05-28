<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Página no encontrada
    
    </h1>

    <ol class="breadcrumb">
      <?php 
      //El @ evita que salga un error por no tener algun valor en la variable $sesionRol
      @$sesionRol = $_SESSION["rol"];
      switch ($sesionRol) {
        case 'Administrador':
          echo '<li><a href="inicio-admin"><i class="fa fa-home"></i> Inicio</a></li>';
          break;
        case 'Vendedor':
          echo '<li><a href="inicio-vendedor"><i class="fa fa-home"></i> Inicio</a></li>';
          break;
        default:
          echo '<li><a href="inicio-cliente"><i class="fa fa-home"></i> Inicio</a></li>';
          break;
      }
      ?>
      
      <li class="active">Página no encontrada</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="error-page">
      
      <h2 class="headline text-primary">404</h2> 

      <div class="error-content">

        <h3>

          <i class="fa fa-warning text-primary"></i> 

          Ooops! Página no encontrada.

        </h3>

        <p>
        
Puedes regresar haciendo 
<?php 
      switch ($sesionRol) {
        case 'Administrador':
          echo '<a href="inicio-admin">click aquí.</a>';
          break;
        case 'Vendedor':
          echo '<a href="inicio-vendedor">click aquí.</a>';
          break;
        default:
          echo '<a href="inicio-cliente">click aquí.</a>';
          break;
      }
?>
        
        </p>

      </div>

    </div>  

  </section>

</div>
