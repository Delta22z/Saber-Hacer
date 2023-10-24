<?php
$servername = "viajes"; // Nombre del servidor MySQL (puede ser localhost si la base de datos está en el mismo servidor que tu aplicación)
$username = "root"; // Nombre de usuario de MySQL
$password = "secundaria22z"; // Contraseña de MySQL
$database = "agencia"; // Nombre de la base de datos que deseas usar

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos.";

// Ahora puedes realizar consultas a la base de datos utilizando $conn

// Por ejemplo, para ejecutar una consulta simple:
$sql = "SELECT * FROM tu_tabla";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
    }
} else {
    echo "No se encontraron registros.";
}

// Cerrar la conexión cuando hayas terminado
$conn->close();
?>
