<?php
session_start();

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

// Inicializar variables para almacenar los datos del usuario
$telefono = '';
$correo = '';
$direccion = '';

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['usuario_id'])) {
    // Obtener el ID de usuario de la sesión
    $usuario_id = $_SESSION['usuario_id'];

    // Preparar y ejecutar consulta para obtener los datos del usuario
    $sql = "SELECT teléfono, correo_electrónico, dirección FROM Usuarios WHERE ID_usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $usuario_id);
    $stmt->execute();
    $stmt->bind_result($telefono, $correo, $direccion);
    $stmt->fetch();

    // Cerrar statement
    $stmt->close();
}

// Cerrar conexión
$conn->close();
?>

<!-- TOP HEADER -->
<div id="top-header">
    <div class="container">
        <ul class="header-links pull-left">
            <?php
            if (!empty($telefono)) {
                echo '<li><a href="#"><i class="fa fa-phone"></i> ' . htmlspecialchars($telefono) . '</a></li>';
            }
            if (!empty($correo)) {
                echo '<li><a href="#"><i class="fa fa-envelope-o"></i> ' . htmlspecialchars($correo) . '</a></li>';
            }
            if (!empty($direccion)) {
                echo '<li><a href="#"><i class="fa fa-map-marker"></i> ' . htmlspecialchars($direccion) . '</a></li>';
            }
            ?>
        </ul>
        <ul class="header-links pull-right">
            <?php
            if (isset($_SESSION['usuario_nombre'])) {
                echo '<li><a href="#"><i class="fa fa-user"></i> ' . $_SESSION['usuario_nombre'] . '</a></li>';
                echo '<li><a href=" ../logout.php"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></li>';
            } else {
                echo '<li><a href=" ../login-form/Login.php"><i class="fa fa-sign-in"></i> Iniciar Sesión</a></li>';
                echo '<li><a href=" ../Registro-form/Registro.php"><i class="fa fa-user-plus"></i> Registrarse</a></li>';
            }
            ?>
            <li><a href="/Perfil-usuario/pf.php"><i class="fa fa-user-o"></i> Mi Cuenta</a></li>
        </ul>
    </div>
</div>
<!-- /TOP HEADER -->

