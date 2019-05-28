<?php
include('../../control/logica/conexion.php');
   
    
$id=$_REQUEST['idDepartamento'];
$name=$_REQUEST['nombreDepartamento'];
if(isset($_REQUEST['idDepartamento'])&&isset($_REQUEST['nombreDepartamento'])){
 

$rs=mysqli_query($conn,"insert into departamento (idDepartamento, nombreDepartamento)values ($id, '$name')");
$idPersona;
echo "listo";
}

?>

