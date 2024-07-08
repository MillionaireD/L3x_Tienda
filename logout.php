<?php
session_start();

// Destruir todas las sesiones
session_destroy();

// Redirigir al usuario a la página principal
header("Location: ../index.php");
exit();
?>
