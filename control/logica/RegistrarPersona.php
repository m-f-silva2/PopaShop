<?php
require_once 'conexion.php';

class RegistrarPersona{
       
public function insert (){


//$idPersona=$_POST['idPersona'];
$idTipoDocumento=$_POST['regTipoDocumento'];
$documentoPersona=$_POST['regNumeroDocumento'];
$nombrePersona=$_POST['regNombre'];
$apellidoPersona=$_POST['regApellido'];
$correoPersona=$_POST['RegCorreo'];
$telefonoPersona=$_POST['regTelefono'];
//$avatarPersona=$_POST['avatarPersona'];
$direccionPersona=$_POST['regDireccion'];

if(     isset($_POST['regTipoDocumento'])
        &&isset($_POST['regNumeroDocumento'])
        &&isset($_POST['regNombre'])
        &&isset($_POST['regApellido'])
        &&isset($_POST['RegCorreo'])
        &&isset($_POST['regTelefono'])
        //&&isset($_POST['avatarPersona'])
        &&isset($_POST['regDireccion'])){
 

$query="insert into persona (
        idPersona,
        idTipoDocumento,
        documentoPersona,
        nombrePersona,
        apellidoPersona,
        correoPersona,
        telefonoPersona,
        avatarPersona,
        direccionPersona) 
        values(".NULL.","
        .$idTipoDocumento.","
        .$documentoPersona.","
        .$nombrePersona.","
        .$apellidoPersona.","
        .$correoPersona.","
        .$telefonoPersona.","
        .NULL.","
        .$direccionPersona.")";
        //print_r($query);
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