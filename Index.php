<!DOCTYPE html>
<html>
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agencia de Viajes - Inicio</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
</head>
<body>
    <header>
        <h1>Agencia de Viajes "DoryanAirs"</h1>
        <img src="logo" alt="logo">
        <nav>
            <a href="#">Piloto</a>
            <a href="#">Sugerencias</a>
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
            $password = "secundaria22z";
            $database = "agencia";
        
            // Crear una conexión a la base de datos
            $conn = new mysqli($servername, $username, $password, $database);
        
            // Comprobar si hay un error en la conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }
        
            // Consulta SQL para seleccionar todos los registros de la tabla "agencia"
            $sql = "SELECT Id, Viajes, Clase_vuelo FROM agencia";
            $result = $conn->query($sql);
            ?>
        
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Viajes</th>
                    <th>Clase de Vuelo</th>
                </tr>
        
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Id"] . "</td>";
                        echo "<td>" . $row["Viajes"] . "</td>";
                        echo "<td>" . $row["Clase_vuelo"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No se encontraron registros.</td></tr>";
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
            <!-- Lista de costos -->
        </div>
        <div class="mejor-piloto-container">
            <div class="mejor-piloto">
                <h2>Mejor Piloto de la Semana</h2>
                <div class="piloto-de-la-semana">
                    <img class="piloto-image" src="piloto.jpg" alt="Piloto de la Semana">
                    <div class="piloto-details">
                        <p>Nombre: Nombre del Piloto</p>
                        <p>Edad: XX años</p>
                        <p>Altura: XX cm</p>
                        <p>No. de Viajes: XX</p>
                        <p>Año de Contratación: XXXX</p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
