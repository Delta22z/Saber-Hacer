<?php
$Id=$_POST['Id'];
$Destino=$_POST['Destino'];
$Costo_Pesos=$_POST['CostoP'];
$Costo_Dolares=$_POST['CostoD'];

$conexion=mysqli_connect('localhost','root','','viajes');

$consulta="insert into costos values($Id,'$Destino','$Costo_Pesos','$Costo_Dolares')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    echo "Costo agregado satisfactoriamente";
}
else
{
echo "Error al agregar Costo";
}
mysqli_close($conexion);

header("Location: /index.html");

exit; 