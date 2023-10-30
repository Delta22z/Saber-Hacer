<?php
$Id=$_POST['Id'];


$conexion=mysqli_connect('localhost','root','','viajes');

$consulta="delete from agencia where id= '".$Id."'";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    echo "Viaje Eliminado satisfactoriamente";
}
else
{
echo "Error al Elminar Viaje";
}
mysqli_close($conexion);

header("Location: /index.html");

exit; 