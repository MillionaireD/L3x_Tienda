<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    // Redirigir al login si no está autenticado
    header("Location: ../login-form/Login.php");
    exit();
}

// Configuración de la conexión a la base de datos
$servername = "127.0.0.1";
$username = "root";
$password = "@Macabro5072001";
$dbname = "tienda_sistemas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar errores de conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID de usuario de la sesión
$usuario_id = $_SESSION['usuario_id'];

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

// Preparar y ejecutar la consulta de actualización
$sql = "UPDATE Usuarios SET nombre = ?, correo_electrónico = ?, teléfono = ?, dirección = ? WHERE ID_usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $nombre, $correo, $telefono, $direccion, $usuario_id);

if ($stmt->execute()) {
    // Redirigir al perfil con un mensaje de éxito
    header("Location: pf.php?mensaje=Datos actualizados correctamente");
} else {
    // Redirigir al perfil con un mensaje de error
    header("Location: pf.php?mensaje=Error al actualizar los datos");
}

// Cerrar statement y conexión
$stmt->close();
$conn->close();
?>
