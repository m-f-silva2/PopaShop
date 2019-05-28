<?php
include('../../control/logica/conexion.php');

$name=$_REQUEST['login'];
$pass=$_REQUEST['password'];

$rs=mysqli_query($conn,"select * from persona where idPersona=1");
$idPersona;


    $datos=array();

while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
//foreach ($rs as $row){
    $datos[]=$row;
    $idPersona= $row['idPersona'];
    echo $idPersona;

}//}

    echo json_encode($datos);

//mysqli_close($conn);
?>

