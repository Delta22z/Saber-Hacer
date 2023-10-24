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
        .costos table,
        .sugerencias table {
            width: 80%; /* Ancho de la tabla */
            margin: 0 auto; /* Centrar la tabla horizontalmente */
            border-collapse: collapse;
        }
        
        .viajes-disponibles th, .viajes-disponibles td,
        .costos th, .costos td,
        .sugerencias th, .sugerencias td {
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
            <a href="#">Sugerencias</a>
            <a href="index.php">INICIO</a>
            <a href="#">Viajes en Tiempo Real</a>
            <a href="#">Acerca de</a>
        </nav>
    </header>

    <div class="container">
        <h2>Sugerencias</h2>
        <div class="sugerencias">
            <!-- Formulario de Sugerencias -->
            <form action="procesar_sugerencia.php" method="POST">
                <label for="tipo_usuario">Tipo de Usuario:</label>
                <select name="tipo_usuario" id="tipo_usuario">
                    <option value="Anónimo">Anónimo</option>
                    <option value="Cliente">Cliente</option>
                </select><br>

                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha"><br>

                <label for="comentario">Comentario:</label>
                <textarea name="comentario" id="comentario" rows="4" cols="50"></textarea><br>

                <input type="submit" value="Enviar Sugerencia">
            </form>
        </div>

        <!-- Tabla de Comentarios -->
        <h2>Comentarios</h2>
        <div class="comentarios">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "viajes";
            // Crear una conexión a la base de datos para la tabla "sugerencias"
            $conn = new mysqli($servername, $username, $password, $database, 3306);
        
            // Comprobar si hay un error en la conexión
            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }
        
            // Consulta SQL para seleccionar todos los registros de la tabla "sugerencias"
            $sql = "SELECT Id, Fecha, Comentario FROM sugerencias";
            $result = $conn->query($sql);
            ?>
        
            <table>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Comentario</th>
                </tr>
        
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Id"] . "</td>";
                        echo "<td>" . $row["Fecha"] . "</td>";
                        echo "<td>" . $row["Comentario"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No se encontraron comentarios.</td></tr>";
                }
                ?>
            </table>
        
            <?php
            // Cerrar la conexión cuando hayas terminado
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
