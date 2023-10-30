<?php
$Id=$_POST['Id'];


$conexion=mysqli_connect('localhost','root','','viajes');

$consulta="delete from costos where id= '".$Id."'";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    echo "Costo Eliminado satisfactoriamente";
}
else
{
echo "Error al Elminar Costo";
}
mysqli_close($conexion);

header("Location: /index.html");

exit; 

