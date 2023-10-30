<?php
$Id=$_POST['Id'];
$Viajes=$_POST['Viajes'];
$Clase_Vuelo=$_POST['Vuelo'];
$Destino=$_POST['Destino'];
$Hora_salida=$_POST['Salida'];
$Hora_Llegada=$_POST['Llegada'];

$conexion=mysqli_connect('localhost','root','','viajes');

$consulta="insert into agencia values($Id,'$Viajes','$Clase_Vuelo','$Destino','$Hora_salida','$Hora_Llegada')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    echo "Viaje agregado satisfactoriamente";
}
else
{
echo "Error al agregar Viaje";
}
mysqli_close($conexion);
// Redirige al usuario al índice (index.html)

header("Location: /index.html");

exit; 