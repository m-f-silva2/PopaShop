<?php
include('../../control/logica/conexion.php');
   class RegistrarPersona{
       
       
       
public function insert (){


$idPersona=$_REQUEST['idPersona'];
$idTipoDocumento=$_REQUEST['idTipoDocumento'];
$documentoPersona=$_REQUEST['documentoPersona'];
$nombrePersona=$_REQUEST['nombrePersona'];
$apellidoPersona=$_REQUEST['apellidoPersona'];
$correoPersona=$_REQUEST['correoPersona'];
$telefonoPersona=$_REQUEST['telefonoPersona'];
//$avatarPersona=$_REQUEST['avatarPersona'];
$direccionPersona=$_REQUEST['direccionPersona'];

if(isset($_REQUEST['idDepartamento'])
        &&isset($_REQUEST['idPersona'])
        &&isset($_REQUEST['idTipoDocumento'])
        &&isset($_REQUEST['documentoPersona'])
        &&isset($_REQUEST['nombrePersona'])
        &&isset($_REQUEST['apellidoPersona'])
        &&isset($_REQUEST['correoPersona'])
        &&isset($_REQUEST['telefonoPersona'])
        //&&isset($_REQUEST['avatarPersona'])
        &&isset($_REQUEST['direccionPersona'])){
 

$query="insert into persona ("
        . "idPersona,"
        . "idTipoDocumento,"
        . "documentoPersona,"
        . "nombrePersona,"
        . "apellidoPersona,"
        . "correoPersona,"
        . "telefonoPersona,"
        . "avatarPersona,"
        . "direccionPersona) "
        . "values("
        . "$idPersona,"
        . "$idTipoDocumento,"
        . "$documentoPersona,"
        . "'$nombrePersona',"
        . "'$apellidoPersona',"
        . "'$correoPersona',"
        . "'$telefonoPersona',"
        . "'NULL',"
        . "'$direccionPersona')";
$rs2= mysqli_query($conn, $query);
echo "Ingresado con exito";
}    
}
public function get(){
    
    $query="select * from persona where idPersona=1";
    $rs=mysqli_query($conn,$query);

     $idPersona;

//
    $datos=array();

while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
//foreach ($rs as $row){
    $datos[]=$row;
    $idPersona= $row['idPersona'];
    echo $idPersona;

}//}

    echo json_encode($datos);
}
   }





?>

