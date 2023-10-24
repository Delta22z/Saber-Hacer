<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "viajes";

    // Obtén los datos del formulario
    $tipo_usuario = $_POST["tipo_usuario"];
    $fecha = $_POST["fecha"];
    $comentario = $_POST["comentario"];

    // Crear una conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $database, 3306);

    // Comprobar si hay un error en la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para insertar la sugerencia en la tabla "sugerencias"
    $sql = "INSERT INTO sugerencias (Tipo_Usuario, Fecha, Comentario) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("sss", $tipo_usuario, $fecha, $comentario);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Redirigir al usuario al index después de mostrar el mensaje
        header("Location: index.php");
        exit; // Asegurarse de que no se procese más contenido después de la redirección
    } else {
        echo "Error al enviar la sugerencia: " . $stmt->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Acceso no permitido.";
}
?>
