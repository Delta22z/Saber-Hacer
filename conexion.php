<?php
$servername = "localhost"; // Nombre del servidor MySQL (puede ser localhost si la base de datos está en el mismo servidor que tu aplicación)
$username = "root"; // Nombre de usuario de MySQL
$password = "secundaria22z"; // Contraseña de MySQL
$database = "agencia"; // Nombre de la base de datos que deseas usar

/ Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar si hay un error en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos.<br>";

// Consulta SQL para seleccionar todos los registros de la tabla "agencia"
$sql = "SELECT Id, Viajes, Clase_vuelo FROM agencia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Id</th><th>Viajes</th><th>Clase_vuelo</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Id"] . "</td><td>" . $row["Viajes"] . "</td><td>" . $row["Clase_vuelo"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron registros.";
}

// Cerrar la conexión cuando hayas terminado
$conn->close();
?>