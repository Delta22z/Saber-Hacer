<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agencia de Viajes - Inicio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    </style>
</head>
<body>
    <header>
        <h1>Agencia de Viajes "DoryanAirs"</h1>
        <img src="img\logo.jpg" alt="logo" width="100px">
        
        
        <nav>
            <a href="#">Piloto</a>
            <a href="sugerencias.php">Sugerencias</a>
            <a href="#">Viajes en Tiempo Real</a>
            <a href="#">Acerca de</a>
        </nav>
    </header>

    <div class="container">
        <h2>Viajes Disponibles</h2>
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

  <h2>Lista de Costos por Destino</h2>
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
        </div>


        <div class="mejor-piloto-container">
            <div class="mejor-piloto">
                <h2>Mejor Piloto de la Semana</h2>
                <div class="piloto-de-la-semana">
                    <img class="piloto-image" src="img\piloto.jpg" alt="Piloto de la Semana">
                    <div class="piloto-details">
                        <p>Nombre: Doryan Morales Ramires</p>
                        <p>Edad: 21 años</p>
                        <p>Altura: 180 cm</p>
                        <p>No. de Viajes: 77</p>
                        <p>Año de Contratación: 2000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<footer>
    
</footer>



</body>
</html>