<?php

$conexion=mysqli_connect('localhost','root','','viajes');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/48/48870.png">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
    <style>
.viajes-disponibles table,
        .costos table {
            width: 80%; /* Ancho de la tabla */
            margin: 0 auto; /* Centrar la tabla horizontalmente */
            border-collapse: collapse;
        }
        
        .viajes-disponibles th, .viajes-disponibles td,
        .costos th, .costos td {
            padding: 10px; /* Agregar espacio entre los datos */
            border: 1px solid #ccc; /* Borde para celdas */
        }
                /* Cambiar el color de texto para "Costo en Pesos" a verde */
                .costos td:nth-child(3) {
            color: green;
        }

        /* Cambiar el color de texto para "Costo en Dólares" a azul */
        .costos td:nth-child(4) {
            color: blue;
        }
            /* Estilos para los botones */
    form {
        text-align: center;
        margin-top: 10px;
    }

    input[type="submit"] {
        background-color: #007BFF; /* Color de fondo */
        color: #fff; /* Color del texto */
        padding: 10px 20px; /* Espaciado interno */
        border: none; /* Sin borde */
        cursor: pointer;
        border-radius: 5px; /* Bordes redondeados */
    }

    input[type="submit"]:hover {
        background-color: #0056b3; /* Cambia el color de fondo al pasar el mouse */
    }
    </style>
    
    <title>Acceso a piloto</title>

</head>
<body>
<header>
        <h1>Agencia de Viajes "DoryanAirs"</h1>
        <img src="img\logo.jpg" alt="logo" width="100px">
        
        
        <nav>
            <a href="index.html">Piloto</a>
            <a href="sugerencias.php">Sugerencias</a>
            <a href="index.php">Inicio</a>
            <a href="index.html">Administrador</a>
        </nav>
    </header>
    <h1> Bienvenido Piloto!</h1>
    
    <div class="container">
        <center><h2>Lista De Viajes Disponibles</h2></center>
        <div class="viajes-disponibles">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "viajes";
            // Crear una conexión a la base de datos
            $conn = new mysqli($servername, $username, $password, $database, 3306);
        
            // Comprobar si hay un error en la conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }
        
            // Consulta SQL para seleccionar todos los registros de la tabla "agencia" con las columnas adicionales
            $sql = "SELECT Id, Destino, Viajes, Clase_vuelo, Hora_salida, Hora_Llegada FROM agencia";
            $result = $conn->query($sql);
            ?>
        
            <table>
                <tr>
                    <th>ID</th>
                    <th>Destino</th>
                    <th>Hora de abordo</th>
                    <th>Clase de Vuelo</th>
                    <th>Hora de Salida</th>
                    <th>Hora de Llegada</th>
                </tr>
        
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Id"] . "</td>";
                        echo "<td>" . $row["Destino"] . "</td>";
                        echo "<td>" . $row["Viajes"] . "</td>";
                        echo "<td>" . $row["Clase_vuelo"] . "</td>";
                        echo "<td>" . $row["Hora_salida"] . "</td>";
                        echo "<td>" . $row["Hora_Llegada"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No se encontraron registros.</td></tr>";
                }
                ?>
            </table>
        
            <?php
            // Cerrar la conexión cuando hayas terminado
            $conn->close();
            ?>
        </div>
<form action="Registroviaje.html">
<input type="submit" value="Añadir Viaje" />
</form>
<form action="Borrar.html">
 <input type="submit" value="Borrar Viaje" />
</form>
</body>
</html>