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
    <title>Administrador</title>
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
    <h1>Bienvenido Administrador!</h1>
    <center><h2>Lista de Costos por Destino</h2></center>
        <div class="costos">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "viajes";
            // Crear una conexión a la base de datos para la tabla "costos"
            $conn = new mysqli($servername, $username, $password, $database, 3306);
        
            // Comprobar si hay un error en la conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }
        
            // Consulta SQL para seleccionar todos los registros de la tabla "costos"
            $sql = "SELECT Id, Destino, Costo_Pesos, Costo_Dolares FROM costos";
            $result = $conn->query($sql);
            ?>
        
            <table>
                <tr>
                    <th>No. Viaje</th>
                    <th>Destino</th>
                    <th>Costo en Pesos</th>
                    <th>Costo en Dólares</th>
                </tr>
        
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Id"] . "</td>";
                        echo "<td>" . $row["Destino"] . "</td>";
                        echo "<td>" . $row["Costo_Pesos"] . "</td>";
                        echo "<td>" . $row["Costo_Dolares"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron registros.</td></tr>";
                }
                ?>
            </table>
        
            <?php
            // Cerrar la conexión cuando hayas terminado
            $conn->close();
            ?>
    <br>
    <form action="Costo.html">
        <input type="submit" value="Añadir Costo" />
</form>
<br>
<form action="Borrar2.html">
        <input type="submit" value="Borrar Costo" />
</form>

</body>
</html>