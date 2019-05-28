<?php
include('../../control/logica/conexion.php');
$rs=mysqli_query($conn,"select * from persona");
while($row = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
    echo $row['idPersona'];
    //echo "hola";
}
mysqli_close($conn);
?>

